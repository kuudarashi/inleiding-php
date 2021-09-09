<?php
session_start();
if (isset($_SESSION['user'])){
    echo 'welkom '.$_SESSION['user']["naam"];
    echo "<p><a href='K01.php'>website</a><p>";
}else{
header('location: K01.php');
}
