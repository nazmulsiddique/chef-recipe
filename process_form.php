<?php
include 'data.php';               // your full array
include 'helper_functions.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['status'=>'error','message'=>'Invalid request']);
    exit;
}

/* Input */
$cake_weight = normalizeNumber($_POST['cake_weight'] ?? 0);
$model       = $_POST['model'] ?? '';
$oven_model  = $_POST['oven_model'] ?? '';

$errors = [];

/* Validation */
if (!$cake_weight || $cake_weight < 150 || $cake_weight > 2000) {
    $errors['cake_weight'] = 'Cake weight must be between 150g and 2000g';
}

$model = 'pound_cake';
$oven_model = $_POST['oven_model'] ?? '';

if (!isset($model_list[$model][$oven_model])) {
    $errors['oven_model'] = 'Invalid oven model';
}

if ($errors) {
    echo json_encode(['status'=>'error','errors'=>$errors]);
    exit;
}

$recipe = $model_list[$model][$oven_model];
$ingredients = [];

/* Calculation */
foreach ($recipe as $ingredient => $percent) {

    if (in_array($ingredient, ['Temperature','Image'])) {
        continue;
    }

    // Vanilla
    if ($ingredient === 'Vanilla Essence (Drop)') {
        $ingredients[] = [
            'ingredient' => $ingredient,
            'value'      => getVanillaEssenceDrop($cake_weight),
            'unit'       => 'drops'
        ];
        continue;
    }

    // Calculate grams
    $grams = round(($cake_weight * (float)$percent) / 100);

    // Egg
    if ($ingredient === 'Egg') {
        $ingredients[] = [
            'ingredient' => 'Egg',
            'grams'      => $grams,
            'pcs'        => calculateEggPcs($grams)
        ];
        continue;
    }

    // Others
    $ingredients[] = [
        'ingredient'  => $ingredient,
        'grams'       => $grams,
        'measurement' => gramsToMeasurement($ingredient, $grams, $measurementData)
    ];
}

/* Response */
echo json_encode([
    'status'      => 'success',
    'model'       => $oven_model,
    'cake_weight' => $cake_weight,
    'temperature' => $recipe['Temperature'] . '°C',
    'image'       => $recipe['Image'],
    'ingredients' => $ingredients
]);
