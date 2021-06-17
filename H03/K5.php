<?php
$leeftijd = 99;
$kosten = 10;

if ($leeftijd > 65) {
    $kosten = $kosten * 0.5;

}

if ($leeftijd <= 12) {
    $kosten = $kosten * 0.5;

}

if ($leeftijd < 3) {
    $kosten = 0;

}
echo $kosten;