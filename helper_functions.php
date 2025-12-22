<?php
function en2bn($number)
{
    if ($number == 0) {
        return $number;
    }
    $bn = array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০");
    $en = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");
    return str_replace($en, $bn, $number);
}

function bn2en($number)
{
    if ($number === null) {
        return $number;
    }

    $bn = array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০");
    $en = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");

    return str_replace($bn, $en, $number);
}

function gramsToAllUnits($grams, $ingredient, $measurement_table)
{
    $map = [
        'Flour'         => 'flour',
        'Sugar'         => 'sugar',
        'Soybean oil'   => 'soybean_oil',
        'Powder milk'   => 'milk_powder',
        'Baking powder' => 'baking_powder'
    ];

    if (!isset($map[$ingredient]) || $grams <= 0) {
        return '';
    }

    $key = $map[$ingredient];

    $order = [
        '1 cup',
        '¾ cup',
        '⅔ cup',
        '½ cup',
        '⅓ cup',
        '¼ cup',
        '1 tbsp',
        '1 tsp',
        '½ tsp'
    ];

    // Index table
    $table = [];
    foreach ($measurement_table as $row) {
        $table[$row['label']] = (float) $row[$key];
    }

    $result = [];

    foreach ($order as $label) {
        if (!isset($table[$label])) continue;

        $unitGram = $table[$label];
        $count = floor($grams / $unitGram);

        if ($count > 0) {
            $grams -= $count * $unitGram;
            $hasFraction = preg_match('/[¼⅓½⅔¾]/u', $label);
            if (strpos($label, 'cup') !== false && !preg_match('/^1 cup$/', $label)) {
                $result[] = $label;
            }
            elseif ($hasFraction) {
                $result[] = $label;
            }
            else {
                if ($count === 1) {
                    $result[] = $label;
                } else {
                     $result[] = $count . ' ' . preg_replace('/^1\s*/', '', $label);
                }
            }
        }
        if ($grams < ($table['½ tsp'] ?? 0)) {
            break;
        }
    }

    return implode(' + ', $result);
}



function eggGramsToPcs($grams)
{
    if ($grams < 40)  return '0 Pcs';
    if ($grams <= 74)  return '1 Pcs';
    if ($grams <= 124) return '2 Pcs';
    if ($grams <= 174) return '3 Pcs';
    if ($grams <= 224) return '4 Pcs';
    if ($grams <= 274) return '5 Pcs';
    if ($grams <= 324) return '6 Pcs';
    if ($grams <= 374) return '7 Pcs';
    if ($grams <= 424) return '8 Pcs';
    if ($grams <= 474) return '9 Pcs';
    if ($grams <= 524) return '10 Pcs';
    if ($grams <= 574) return '11 Pcs';

    return '12 Pcs';
}

function getVanillaEssenceDrop($weight)
{
    return max(3, round($weight / 100));
}
