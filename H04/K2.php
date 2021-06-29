<?php
$a = 15;
function delen ($a){
    if ($a%3 == 0){
        return "true";
    }else{
        return "false";
    }
}

echo delen($a);