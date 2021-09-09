<?php
 if ($_POST['inlognaam'] == ""){
     echo "vull aub uw naam in";
     echo "<br><a href=\"K1.html\"> terug</a><br>";
 }

if ($_POST['adres'] == ""){
    echo "vull aub adres in";
    echo "<br><a href=\"K1.html\">terug</a><br>";
}

if ($_POST['email'] == ""){
    echo "vul aub email in";
    echo "<br><a href=\"K1.html\">terug</a><br>";
}

if ($_POST['wachtwoord'] == ""){
    echo "vul aub wachtwoord in ";
    echo "<br><a href=\"K1.html\">terug</a><br>";
}
echo $_POST['inlognaam']."<br>";
echo $_POST['adres']."<br>";
echo $_POST['email'];
