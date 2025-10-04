<?php
include 'data.php';
include 'helper_functions.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cake_weight = isset($_POST['cake_weight']) ? (float)$_POST['cake_weight'] : 0;
    $oven_model  = isset($_POST['oven_model']) ? trim($_POST['oven_model']) : '';

    $errors = [];
    // Validate cake weight
    if (!$cake_weight) {
        $errors['cake_weight'] = "Cake weight is required.";
    } elseif ($cake_weight < 100 || $cake_weight > 2000) {
        $errors['cake_weight'] = "Cake weight must be between 100g and 2000g.";
    }
    // Validate oven model
    if (!$oven_model) {
        $errors['oven_model'] = "Oven model is required.";
    } elseif (!isset($data[$oven_model])) {
        $errors['oven_model'] = "Selected oven model is invalid.";
    }
    // If there are errors, return them
    if (!empty($errors)) {
        echo json_encode(['status' => 'error', 'errors' => $errors]);
        exit;
    }
    // Generate recipe
    $ingredientsArr = [];
    $totalBeforeRound = 0; // total before rounding
    $totalAfterRound = 0;  // for display
    foreach ($data[$oven_model] as $ingredient => $percent) {
        if ($ingredient === "Temperature") continue;

        if ($ingredient === "Vanilla Essence (Drop)") {
            $drops = getVanillaEssenceDrop((int)$cake_weight);
            $ingredientsArr[] = [
                'ingredient' => $ingredient,
                'quantity' => $drops . " drop(s)",
                'grams' => 0
            ];
        } else {
            $num = (float)str_replace("%", "", $percent);
            $exact = ($cake_weight * $num) / 100; // exact float value
            $grams = round($exact, 0); // display rounded
            $ingredientsArr[] = [
                'ingredient' => $ingredient,
                'quantity' => $grams . " g",
                'grams' => $exact // keep unrounded for total
            ];
            $totalBeforeRound += $exact;
            $totalAfterRound += $grams;
        }
    }

    // Example oven image mapping
    $ovenImages = [
        'M32CTS' => 'images/M32CTS.png',
        'M25CDS' => 'images/M25CDS.png',
        'M30AS3' => 'images/M30AS3.png',
        'G30SCT' => 'images/G30SCT.png',
        '25CDP'  => 'images/25CDP.png',
    ];

    echo json_encode([
        'status' => 'success',
        'ingredients' => $ingredientsArr,
        'temperature' => $data[$oven_model]['Temperature'],
        'total_before_round' => round($totalBeforeRound, 2),
        'total_after_round'  => round($totalAfterRound, 0),
        'oven_image' => $ovenImages[$oven_model] ?? ''
    ]);

}
?>
