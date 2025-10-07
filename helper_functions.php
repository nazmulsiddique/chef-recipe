<?php
function getVanillaEssenceDrop($value) {
    if ($value == 100) {
        return 2;
    } elseif ($value >= 101 && $value <= 2000) {
        return intdiv($value - 1, 100) + 1;
    }
    return "";
}
function en2bn($number)
{
    if ($number == 0) {
        return $number;
    }
    $bn = array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০");
    $en = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");
    return str_replace($en, $bn, $number);
}
?>