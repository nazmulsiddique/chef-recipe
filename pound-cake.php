<?php include 'header.php'; ?>

<body>
    <div class="top-bar-area">
        <?php include 'navbar.php'; ?>
        <section class="pb-5 pb-lg-0 mt-5">
            <div class="container">
                <div class="row align-items-start position-relative" style="min-height: 600px;">
                    <div class="col-lg-6">
                        <h1 class="hero-title" data-i18n="pound.hero.title">Pound Cake</h1>
                        <p class="pb-5 pe-md-5 hero-description" data-i18n="pound.hero.description">
                            Our pound cake is made with the perfect blend of ingredients, delivering a soft and moist texture with a rich, classic taste. Whether it’s for an afternoon snack, a special celebration, or simply a sweet treat every slice will bring you joy and satisfaction.
                        </p>
                        <div class="d-md-none cursor-pointer">
                            <img class="img-fluid" src="images/pound-cake-lerge.png">
                        </div>
                    </div>

                    <div>
                        <div class="text-center text-lg-end position-absolute left-0 top-0 d-none d-md-block cursor-pointer" style="width: 700px; right:0;">
                            <img class="img-fluid mt-5" src="images/pound-cake-lerge.png">
                        </div>
                    </div>
                </div>
            </div> 
        </section>

    </div>

    <div class="filter-area mb-5">
        <div class="container pound-cake">
            <?php include 'breadcrumb.php'; ?>
            <h2 class="pound-cake-title mb-5" data-i18n="pound.calculate_title"> <span></span> Easily calculate your recipe in seconds</h2>
                <form id="cakeForm">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="cake_weight" class="form-label" data-i18n="form.cake_weight.label">How many grams of cake do you want to make?</label>
                                <input type="number" class="form-control" id="cake_weight" name="cake_weight" placeholder="Enter your cake weight in Grams" data-i18n="form.cake_weight.placeholder" data-i18n-attr="placeholder" required>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="oven_model" class="form-label" data-i18n="form.oven_model.label">Which model of oven do you want to use for baking the cake?</label>
                                <select class="form-select w-100" id="oven_model" name="oven_model" required>
                                    <option value="" selected disabled hidden data-i18n="form.oven_model.placeholder">Select your model</option>
                                    <option value="M32CTS">M32CTS</option>
                                    <option value="M25CDS">M25CDS</option>
                                    <option value="M30AS3">M30AS3</option>
                                    <option value="G30SCT">G30SCT</option>
                                    <option value="25CDP">25CDP</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <button type="submit" class="btn btn-primary w-100" data-i18n="form.submit">Submit</button>
                        </div>
                    </div>
                </form>

                <!-- Result will show here -->
            <div id="responseMsg" class="mt-3"></div>
            <div class="row mt-5 d-none" id="recipeDiv">
                <div class="col-lg-8">
                    <table class="table">
                        <thead>
                            <tr>
                                <th data-i18n="table.headers.ingredients">Ingredients</th>
                                <th data-i18n="table.headers.quantity">Quantity</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                        
                        <tfoot></tfoot>
                    </table>
                </div>
                <div class="col-lg-4">
                    <div class="oven-model">
                        <div class="d-flex justify-content-center mt-3 temperature mb-4">
                            <h2 data-i18n="recipe.temperature_default">170 °</h2>
                            <img src="images/fire-icon.png" alt="" class="img-fluid">
                        </div>
                        <h4 data-i18n="recipe.temperature_label">Set Temperature</h4>
                        <p data-i18n="recipe.temperature_note">“The temperature may need to be increased or decreased depending on the voltage.”</p>
                        <img id="oven_image" src="" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
                
                <div class="details-info mt-5">
                    <div class="row">
                        <div class="col-lg-12">
                           <h2 class="pound-cake-title mb-5" data-i18n="pound.details_title"> <span></span>  Details Recipe</h2>
                        </div>
                        <div class="col-lg-7">
                            <p data-i18n="pound.steps.step1"><strong>Step 1:</strong> Put the flour, milk powder, and baking powder in a bowl, strain them with a strainer, and mix well. </p>
                            <p data-i18n="pound.steps.step2"><strong>Step 2:</strong> In another bowl, beat the eggs with a beater. Gradually add sugar while beating until it becomes fluffy and foamy.</p>
                            <p data-i18n="pound.steps.step3"><strong>Step 3:</strong> Gradually add the flour mixture into the egg mixture and mix well. Then add soybean oil and vanilla essence (drops) and combine thoroughly.</p>
                            <p data-i18n="pound.steps.step4"><strong>Step 4:</strong> Before pouring the batter, line the mold with baking paper and brush lightly with oil. Then pour the batter into the mold.</p>
                        </div>
                        <div class="col-lg-5">
                            <img class="img-fluid" src="images/details-image-one.jpg" alt="" >
                        </div>

                        <div class="col-lg-5 mt-3">
                            <img class="img-fluid" src="images/details-image-two.png" alt="" >
                        </div>
                        <div class="col-lg-7 mt-3">
                            <p data-i18n="pound.steps.step5"><strong>Step 5:</strong> Preheat the oven in convection mode at the set temperature for 5 minutes. Once preheating is complete, place the mold with the batter into the oven.</p>
                            <p data-i18n="pound.steps.step6"><strong>Step 6:</strong> Set the convection time for 40–60 minutes, adjust the temperature as required, and start the oven.</p>
                            <p data-i18n="pound.steps.step7"><strong>Step 7:</strong> Baking time may vary depending on voltage, mold, and type of cake. After about 30-40 minutes, insert a dry stick into the cake to check. If the stick comes out with batter, the cake is not ready yet. If it comes out clean, the cake is done.</p>
                        </div>

                        <div class="col-lg-12 mt-5">
                            <h2 class="pound-cake-title mb-5" data-i18n="pound.tips_title"> <span></span> Cake Baking Tips</h2>
                            <p data-i18n="pound.tips.tip1"><strong>1. </strong>If baking powder is old, the cake will collapse, so always use good quality and fresh baking powder.</p>
                            <p data-i18n="pound.tips.tip2"><strong>2. </strong>Never store baking powder in the refrigerator; always keep it at room temperature.</p>
                            <p data-i18n="pound.tips.tip3"><strong>3. </strong>Do not open the oven door repeatedly while baking.</p>
                            <p data-i18n="pound.tips.tip4"><strong>4. </strong>Measure all ingredients accurately, as incorrect proportions may cause your cake to turn out poorly.</p>
                            <p data-i18n="pound.tips.tip5"><strong>5. </strong>Use eggs at normal room temperature. Take them out of the refrigerator at least 30 minutes before use.</p>
                        </div>

                        <div class="col-lg-12 mt-5">
                            <h2 class="pound-cake-title mb-5" data-i18n="pound.note_title"> <span></span> Note</h2>
                            <p data-i18n="pound.note_text">Each recipe is tested in our lab. However, variations in ingredients and cooking methods may affect the quality of the food.</p>
                        </div>
                        
                    </div>
                </div>
            
        </div>
    </div>

<?php include 'footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
(function ($) {
    let lastResponse = null;
    let lastErrors = null;
    let lastGeneralMessageKey = null;

    function translateQuantity(value, unit) {
        return i18n.t(`units.${unit}`, { value: value });
    }

    function renderErrors(errors) {
        $(".error-msg").remove();
        if (!errors) {
            return;
        }

        if (errors.cake_weight) {
            $("#cake_weight").after(`<div class="text-danger error-msg">${i18n.t(errors.cake_weight)}</div>`);
        }

        if (errors.oven_model) {
            $("#oven_model").after(`<div class="text-danger error-msg">${i18n.t(errors.oven_model)}</div>`);
        }
    }

    function renderRecipe(data) {
        if (!data || data.status !== 'success') {
            return;
        }

        if (!data.ingredients || data.ingredients.length === 0) {
            return;
        }

        let tbody = '';

        data.ingredients.forEach(item => {
            const name = i18n.t(item.ingredient_key);
            const quantity = translateQuantity(item.quantity_value, item.quantity_unit);

            tbody += `
                <tr>
                    <td>${name}</td>
                    <td>${quantity}</td>
                </tr>
            `;
        });

        $("#recipeDiv table tbody").html(tbody);
        $("#recipeDiv table tfoot").html(`
            <tr>
                <td class="fw-bold">${i18n.t('table.total')}</td>
                <td class="fw-bold">${translateQuantity(data.total_after_round, 'grams')}</td>
            </tr>
        `);

        $("#recipeDiv .temperature h2").text(i18n.t('recipe.temperature_value', { value: data.temperature }));
        $("#oven_image").attr("src", data.oven_image);
        $("#recipeDiv").removeClass("d-none");
    }

    function clearGeneralMessage() {
        $("#responseMsg").empty();
        lastGeneralMessageKey = null;
    }

    function setGeneralMessage(key, type = 'danger') {
        lastGeneralMessageKey = key;
        $("#responseMsg").html(`<div class="alert alert-${type}" data-i18n-key="${key}">${i18n.t(key)}</div>`);
    }

    function handleResponse(response) {
        if (response.status === 'error') {
            lastErrors = response.errors;
            lastResponse = null;
            renderErrors(response.errors);
            $("#recipeDiv").addClass("d-none");
            clearGeneralMessage();
        } else if (response.status === 'success') {
            lastResponse = response;
            lastErrors = null;
            renderErrors(null);
            renderRecipe(response);
            clearGeneralMessage();
        }
    }

    $(document).ready(function () {
        $("#cakeForm").on("submit", function (e) {
            e.preventDefault();

            $(".error-msg").remove();
            clearGeneralMessage();

            $.ajax({
                url: "process_form.php",
                type: "POST",
                data: $(this).serialize(),
                dataType: "json",
                success: function (response) {
                    handleResponse(response);
                },
                error: function () {
                    setGeneralMessage('errors.general');
                }
            });
        });
    });

    document.addEventListener('i18n:change', function () {
        renderErrors(lastErrors);
        renderRecipe(lastResponse);

        if (lastGeneralMessageKey) {
            setGeneralMessage(lastGeneralMessageKey);
        }
    });

    if (window.i18n && i18n.ready) {
        renderErrors(lastErrors);
        renderRecipe(lastResponse);

        if (lastGeneralMessageKey) {
            setGeneralMessage(lastGeneralMessageKey);
        }
    }
})(jQuery);
</script>

