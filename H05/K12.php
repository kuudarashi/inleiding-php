<?php
 if ($_POST['inlognaam'] == ""){
     echo "beter vul je je kanker naam nu nu in ";
     echo "<br><a href=\"K1.html\"> klik die k link zodat je het invult</a><br>";
 }

if ($_POST['adres'] == ""){
    echo "smh imagine dat je je adres vergeet fix die shit ";
    echo "<br><a href=\"K1.html\"> klik die k link zodat je het invult</a><br>";
}

if ($_POST['email'] == ""){
    echo "bro ga nie dom doen ah mogool ik stoot je he vul je email NU in ";
    echo "<br><a href=\"K1.html\"> klik die k link zodat je het invult</a><br>";
}

if ($_POST['wachtwoord'] == ""){
    echo "jij bent echt een kanker domme slet he? rot eigenlijk maar op wil geen domme mensen hier ";
    echo "<br><a href=\"K1.html\"> klik die k link zodat je het invult wnr je nieuwe breincellen hebt</a><br>";
}
echo $_POST['inlognaam']."<br>";
echo $_POST['adres']."<br>";
echo $_POST['email'];
