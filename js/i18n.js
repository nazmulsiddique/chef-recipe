(function () {
    const STORAGE_KEY = 'recipe_language';
    const DEFAULT_LANG = 'bn';
    let translations = {};
    let currentLang = localStorage.getItem(STORAGE_KEY) || DEFAULT_LANG;
    let isReady = false;

    const DIGITS = {
        en: ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'],
        bn: ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯']
    };

    function convertDigits(value, source, target) {
        if (value === null || value === undefined) {
            return '';
        }

        const stringValue = String(value);

        let result = '';

        for (let index = 0; index < stringValue.length; index += 1) {
            const character = stringValue.charAt(index);
            const digitIndex = source.indexOf(character);

            if (digitIndex > -1) {
                result += target[digitIndex];
            } else {
                result += character;
            }
        }

        return result;
    }

    function localizeDigits(value) {
        if (currentLang !== 'bn') {
            if (value === null || value === undefined) {
                return '';
            }

            return String(value);
        }

        return convertDigits(value, DIGITS.en, DIGITS.bn);
    }

    function normalizeDigits(value) {
        if (value === null || value === undefined) {
            return '';
        }

        return convertDigits(value, DIGITS.bn, DIGITS.en);
    }

    function localizeNumber(value) {
        if (value === null || value === undefined || value === '') {
            return '';
        }

        return currentLang === 'bn'
            ? convertDigits(value, DIGITS.en, DIGITS.bn)
            : String(value);
    }

    function normalizeNumber(value) {
        if (value === null || value === undefined || value === '') {
            return '';
        }

        return convertDigits(value, DIGITS.bn, DIGITS.en);
    }

    function resolveTranslation(lang, key) {
        if (!translations[lang]) {
            return undefined;
        }
        return key.split('.').reduce((result, part) => {
            if (result && Object.prototype.hasOwnProperty.call(result, part)) {
                return result[part];
            }
            return undefined;
        }, translations[lang]);
    }

    function translateKey(key, replacements = {}) {
        if (!key) {
            return '';
        }

        let translation = resolveTranslation(currentLang, key);
        if (translation === undefined) {
            translation = resolveTranslation(DEFAULT_LANG, key);
        }

        if (typeof translation !== 'string') {
            return key;
        }

        let output = translation.replace(/\{(\w+)\}/g, (match, p1) => {
            if (Object.prototype.hasOwnProperty.call(replacements, p1)) {
                return replacements[p1];
            }
            return match;
        });

        if (!output) {
            return key;
        }

        return localizeDigits(output);
    }

    function collectReplacements(element) {
        const replacements = {};
        Object.keys(element.dataset).forEach((key) => {
            if (key.startsWith('i18nParam')) {
                const paramName = key.replace('i18nParam', '');
                if (paramName) {
                    const normalized = paramName.charAt(0).toLowerCase() + paramName.slice(1);
                    replacements[normalized] = element.dataset[key];
                }
            }
        });

        if (element.dataset.year) {
            replacements.year = element.dataset.year;
        }

        return replacements;
    }

    function applyTranslationToElement(element) {
        const key = element.getAttribute('data-i18n');
        if (!key) {
            return;
        }

        const attr = element.getAttribute('data-i18n-attr');
        const replacements = collectReplacements(element);
        const translation = translateKey(key, replacements);

        if (!translation) {
            return;
        }

        if (attr) {
            element.setAttribute(attr, translation);
        } else {
            element.innerHTML = translation;
        }
    }

    function applyTranslations() {
        document.documentElement.setAttribute('lang', currentLang);
        document.title = translateKey('app.title') || document.title;

        const switcher = document.getElementById('languageSwitcher');
        if (switcher && switcher.value !== currentLang) {
            switcher.value = currentLang;
        }

        document.querySelectorAll('[data-i18n]').forEach(applyTranslationToElement);
    }

    function setLanguage(lang) {
        if (!translations[lang]) {
            lang = DEFAULT_LANG;
        }

        if (currentLang === lang) {
            return;
        }

        currentLang = lang;
        localStorage.setItem(STORAGE_KEY, currentLang);
        applyTranslations();
        dispatchChangeEvent();
    }

    function dispatchChangeEvent() {
        const event = new CustomEvent('i18n:change', {
            detail: {
                language: currentLang
            }
        });
        document.dispatchEvent(event);
    }

    function initLanguageSwitcher() {
        const switcher = document.getElementById('languageSwitcher');
        if (!switcher) {
            return;
        }

        switcher.addEventListener('change', function (event) {
            setLanguage(event.target.value);
        });
    }

    function bootstrap() {
        fetch('js/translations.json')
            .then((response) => response.json())
            .then((data) => {
                translations = data;
                if (!translations[currentLang]) {
                    currentLang = DEFAULT_LANG;
                }
                applyTranslations();
                initLanguageSwitcher();
                isReady = true;
                dispatchChangeEvent();
            })
            .catch((error) => {
                console.error('Unable to load translations:', error);
            });
    }

    bootstrap();

    window.i18n = {
        t: translateKey,
        setLanguage,
        localizeNumber,
        normalizeNumber,
        get current() {
            return currentLang;
        },
        get ready() {
            return isReady;
        }
    };
})();
