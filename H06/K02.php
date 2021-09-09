<?php
function cursist ($cursistnr, $plaats)

{
    $servername = "localhost";
    $dbname = "id16992308_phpschool";

    $username = "id16992308_kuudarashi";

    $password = "iLXjwE(gzetVzr@4";

    try {
        $conn = new PDO("mysql:host={$servername};dbname={$dbname}", $username, $password);
        // set PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "connected succesfully";
    } catch (PDOException $e) {
        echo "connection failed". $e->getMessage();
    }
    $query ="select cursistnr, plaats from cursist where cursistnr =".$cursistnr." and plaats ='".$plaats."'";
    $stmt = $conn->prepare($query) or die ("error 1.");
        $stmt->execute() or die('error 2.');

    $test = $stmt->fetch();

    if(isset($test[0])) {
        echo $test[0];
    } else {
        echo "geen toegang";
    }


//    $gegevens = ["select cursistnr from cursist where cursistnr = 64" => "select plaats from cursist where plaats ='Made'"];
//    $toegang = "geen toegang";
//    foreach ($gegevens as $gegeven => $waarde) {
//
//        if ($cursistnr == $gegeven && $plaats == $waarde) {
//            $toegang = "welkom";
//        }
//
//
//    }
//    return $toegang;


}
echo cursist ($_POST["cursistnr"],$_POST["plaats"]);