<?php
function getVanillaEssenceDrop($value) {
    if ($value == 100) {
        return 2;
    } elseif ($value >= 101 && $value <= 2000) {
        return intdiv($value - 1, 100) + 1;
    }
    return "";
}
?>