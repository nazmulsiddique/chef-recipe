<?php
include 'data.php';

include 'helper_functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cake_weight = (float)($_POST['cake_weight'] ?? 0);
    $oven_model  = $_POST['oven_model'] ?? '';
     if ($cake_weight > 0 && isset($data[$oven_model])) {
        echo "<h4>Recipe for {$cake_weight}g Cake ({$oven_model})</h4>";
        echo "<ul>";
        foreach ($data[$oven_model] as $ingredient => $percent) {
            if ($ingredient === "Temperature") continue;

            if ($ingredient === "Vanilla Essence (Drop)") {
                $drops = getVanillaEssenceDrop((int)$cake_weight);
                echo "<li>{$ingredient}: {$drops} drop(s)</li>";
            } else {
                $num = (float)str_replace("%", "", $percent);
                $grams = round(($cake_weight * $num) / 100, 0);
                echo "<li>{$ingredient}: {$grams} g</li>";
            }
        }
        echo "</ul>";
        echo "<p><b>Baking Temperature:</b> {$data[$oven_model]['Temperature']}°C</p>";
    } else {
        echo "Please enter weight and select oven model.";
    }
   
}

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $cake_weight = $_POST['cake_weight'] ?? '';
//     $oven_model  = $_POST['oven_model'] ?? '';

//     if (!empty($cake_weight) && !empty($oven_model)) {
//         echo "You want to make <b>$cake_weight grams</b> of cake using oven model <b>$oven_model</b>.";
//     } else {
//         echo "Please fill in all fields.";
//     }
// }
?>