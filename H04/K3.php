<?php

$a = "reggin";

function uno_revcard ($a){
    $b = "";

    $length = strlen ($a)-1;
    for ($i =$length; $i >=0; $i--){
        $b.=$a[$i];
    }
    return $b;
}

echo uno_revcard($a);
