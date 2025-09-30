<?php
    function getVanillaEssenceDrop($value) {
        if ($value >= 100 && $value <= 2000) {
            return intdiv($value - 1, 100) + 1;
        }
        return "";
    }
?>