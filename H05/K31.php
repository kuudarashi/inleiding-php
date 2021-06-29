<?php
function amail ($email,$wachtwoord)
{
    $gegevens = ["piet@worldonline.nl" => "doetje123", "klaas@carpets.nl" => "snoepje777", "truushendriks@wegweg.nl" => "arkiearkie201"];
    $toegang = false;
    foreach ($gegevens as $gegeven => $waarde) {

        if ($email == $gegeven && $wachtwoord == $waarde) {
            $toegang = true;
        }


    }
    return $toegang;


}
echo amail ($_POST["email"],$_POST["wachtwoord"]);