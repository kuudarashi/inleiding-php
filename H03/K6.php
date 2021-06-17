<?php
$clubs = array("De spartelkuikens","De waterbuffels","Plonsmderin","Bommetje");
$zwemmers = array(25,32,11,23);


foreach ($zwemmers as $zwemvereniging){
    $zwemvereniging = floor($zwemvereniging/5);
    echo $zwemvereniging;
    for ($i = 0; $i < $zwemvereniging; $i++) {
        echo "<img src='../img/swemmen/zwem.jpg'>";
    }

}