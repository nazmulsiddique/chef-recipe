<?php
include 'data.php';
include 'helper_functions.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') exit;

$cake_weight = (float) preg_replace('/[^0-9]/', '', $_POST['cake_weight'] ?? 0);
$oven_model  = trim($_POST['oven_model'] ?? '');

$errors = [];

/* Cake weight */
if (empty($_POST['cake_weight'])) {
    $errors['cake_weight'] = 'errors.cake_weight_required';
} elseif ($cake_weight < 150 || $cake_weight > 2000) {
    $errors['cake_weight'] = 'errors.cake_weight_range';
}

/* Oven model */
if (empty($oven_model)) {
    $errors['oven_model'] = 'errors.oven_model_required';
} elseif (!isset($data[$oven_model])) {
    $errors['oven_model'] = 'errors.oven_model_invalid';
}

/* Return errors */
if (!empty($errors)) {
    echo json_encode([
        'status' => 'error',
        'errors' => $errors
    ]);
    exit;
}

$ingredientsArr = [];
$total = 0;

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

    if (in_array($ingredient, ['Temperature','Image'])) continue;

    if ($ingredient === 'Vanilla Essence (Drop)') {
        $drops = getVanillaEssenceDrop($cake_weight);
        $ingredientsArr[] = [
            'ingredient_key' => $ingredientKeys[$ingredient],
            'quantity_value' => getVanillaEssenceDrop($cake_weight),
            'quantity_unit'  => 'drops',
            'measurement'    => $drops . ' drops'
        ];
        continue;
    }

    $exact = ($cake_weight * $percent) / 100;
    $grams = round($exact, 2);
    //$grams = round($exact);

    if ($ingredient === 'Egg') {
        $measurement = eggGramsToPcs($grams);
    } else {
        $measurement = gramsToAllUnits($grams, $ingredient, $measurement_table);
    }

    $ingredientsArr[] = [
        'ingredient_key' => $ingredientKeys[$ingredient],
        'quantity_value' => $grams,
        'quantity_unit'  => 'grams',
        'measurement'    => $measurement
    ];

    $total += $grams;
}

echo json_encode([
    'status' => 'success',
    'ingredients' => $ingredientsArr,
    'total' => $total,
    'temperature' => $data[$oven_model]['Temperature'],
    'oven_image' => $data[$oven_model]['Image']
]);
