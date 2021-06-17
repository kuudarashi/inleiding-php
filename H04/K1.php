<?php

function temparatuur ($a){
    $b = 32;
    $c = $a * 1.8;
    $d = $c + $b;

    return $d;
}

echo temparatuur(45);