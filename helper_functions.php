<?php

/* Normalize numeric input */
function normalizeNumber($value)
{
    if (function_exists('bn2en')) {
        $value = bn2en($value);
    }
    return (float)preg_replace('/[^0-9.]/', '', (string)$value);
}

/* Vanilla Essence Drops */
function getVanillaEssenceDrop($value)
{
    $value = (int)$value;
    if ($value < 100) return 0;
    return max(2, (int)ceil($value / 100));
}

/* Egg pieces calculation (1 egg ≈ 50g) */
function calculateEggPcs($grams)
{
    return round($grams / 50, 1);
}

/* Convert grams to kitchen measurement */
function gramsToMeasurement($ingredient, $grams, $measurementData)
{
    $map = [
        'Flour' => 'flour',
        'Sugar' => 'sugar',
        'Soybean oil' => 'oil',
        'Powder milk' => 'milk_powder',
        'Baking powder' => 'baking_powder'
    ];

    if (!isset($map[$ingredient])) return '—';

    $key = $map[$ingredient];
    $remaining = $grams;
    $result = [];

    foreach (array_reverse($measurementData) as $row) {

        if (!isset($row[$key])) continue;

        $unitGram = $row[$key];
        if ($remaining >= $unitGram) {

            $count = floor($remaining / $unitGram);
            if ($count > 0) {

                // ✅ Clean label (1 cup → cup)
                $label = preg_replace('/^1\s*/', '', $row['label']);

                $result[] = ($count > 1 ? $count . ' ' : '') . $label;
                $remaining -= $count * $unitGram;
            }
        }
    }

    return $result ? implode(' + ', $result) : '—';
}
