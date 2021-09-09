<?php
session_start();

if (isset($_SESSION['user'])&& $_SESSION ['user'] ['rol'] == "admin"){
    echo "welkom ".$_SESSION['user']['naam']." to the bois";
}
else{
    header('location: K01.php');

}