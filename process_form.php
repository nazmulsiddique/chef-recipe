<?php
include 'data.php';
include 'helper_functions.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $rawCakeWeight = isset($_POST['cake_weight']) ? $_POST['cake_weight'] : '';

    if (function_exists('bn2en')) {
        $rawCakeWeight = bn2en($rawCakeWeight);
    }

    $rawCakeWeight = preg_replace('/[^0-9]/', '', (string)$rawCakeWeight);

    $cake_weight = $rawCakeWeight !== '' ? (float)$rawCakeWeight : 0;
    $oven_model  = isset($_POST['oven_model']) ? trim($_POST['oven_model']) : '';

    $errors = [];
    // Validate cake weight
    if (!$cake_weight) {
        $errors['cake_weight'] = 'errors.cake_weight_required';
    } elseif ($cake_weight < 100 || $cake_weight > 2000) {
        $errors['cake_weight'] = 'errors.cake_weight_range';
    }
    // Validate oven model
    if (!$oven_model) {
        $errors['oven_model'] = 'errors.oven_model_required';
    } elseif (!isset($data[$oven_model])) {
        $errors['oven_model'] = 'errors.oven_model_invalid';
    }
    // If there are errors, return them
    if (!empty($errors)) {
        echo json_encode(['status' => 'error', 'errors' => $errors]);
        exit;
    }
    // Generate recipe
    $ingredientsArr = [];
    $totalBeforeRound = 0;
    $totalAfterRound = 0;
    $ingredientKeys = [
        'Flour' => 'ingredients.flour',
        'Sugar' => 'ingredients.sugar',
        'Egg' => 'ingredients.egg',
        'Powder milk' => 'ingredients.powder_milk',
        'Soybean oil' => 'ingredients.soybean_oil',
        'Baking powder' => 'ingredients.baking_powder',
        'Vanilla Essence (Drop)' => 'ingredients.vanilla_essence'
    ];

    foreach ($data[$oven_model] as $ingredient => $percent) {
        // Skip non-ingredient keys
        if (in_array($ingredient, ["Temperature", "Image"])) continue;

        // Handle Vanilla Essence (Drop)
        if ($ingredient === "Vanilla Essence (Drop)") {
            $drops = getVanillaEssenceDrop((int)$cake_weight);

            $ingredientsArr[] = [
                'ingredient_key'   => $ingredientKeys[$ingredient] ?? $ingredient,
                'quantity_value'   => $drops,
                'quantity_unit'    => 'drops',
                'grams'            => 0
            ];

            continue;
        }

        // Calculate grams from percent
        $exact = ($cake_weight * (float)$percent) / 100; // exact float value
        $grams = round($exact, 0);

        $ingredientData = [
            'ingredient_key'   => $ingredientKeys[$ingredient] ?? $ingredient,
            'quantity_value'   => $grams,
            'quantity_unit'    => 'grams',
            'grams'            => $exact // keep unrounded for total
        ];

        if ($ingredient === "Egg") {
            $ingredientData['note_key'] = 'units.egg_equivalent';
            $ingredientData['note_params'] = ['value' => 50];
        }

        // Store ingredient info
        $ingredientsArr[] = $ingredientData;

        // Update totals
        $totalBeforeRound += $exact;
        $totalAfterRound  += $grams;
    }


    // Example oven image mapping
    // $ovenImages = [
    //     'M32CTS' => 'images/M32CTS.png',
    //     'M25CDS' => 'images/M25CDS.png',
    //     'M30AS3' => 'images/M30AS3.png',
    //     'G30SCT' => 'images/G30SCT.png',
    //     '25CDP'  => 'images/25CDP.png',
    // ];

    echo json_encode([
        'status' => 'success',
        'ingredients' => $ingredientsArr,
        'temperature' => $data[$oven_model]['Temperature'],
        'total_before_round' => round($totalBeforeRound, 2),
        'total_after_round'  => round($totalBeforeRound, 0),
        // 'oven_image' => $ovenImages[$oven_model] ?? ''
        'oven_image' => $data[$oven_model]['Image']
    ]);

}
?>
