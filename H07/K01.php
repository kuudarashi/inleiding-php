<?php
session_start();
    $users= array(
        "miku"=> ["ww" =>"123","rol" => "user"],
        "arata"=> ["ww" =>"abc","rol" => "user"],
        "shinobu"=> ["ww" =>"ttt","rol" => "user"],
        "nour"=> ["ww" => "k", "rol"=>"admin"],
        "alec"=> ["ww" => "is gay", "rol"=>"admin"],
        //"kuudarashi" => ["wachtwoord" => "the pass only god knows", "rol"=>"god"]
    );
if (isset($_GET['loguit'])) {
    $_SESSION = array();
    session_destroy();
}
if (isset($_POST['knop'])
    && isset($users[$_POST["login"]])
    && $users[$_POST['login']] ['ww'] == $_POST['ww']) {
    $_SESSION['user'] = array("naam" => $_POST['login'],
        "ww" => $users[$_POST['login']] ['ww'],
        "rol" => $users[$_POST['login']] ['rol'] );
    $message = "welkom !!! ".$_SESSION['user']["naam"]." met de rol ".$_SESSION["user"] ["rol"];
}else {
     echo "cookie";
     $message = "inloggen";
}
?>
<html>
<head>
</head>
<body>
<h1><?php echo $message; ?></h1>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
   name <input type="text" name="login" value=""><br>
   password <input type="password" name="ww" value="">
    <input type="submit" name="knop">

</form>
<a href="dasite.php">da site</a>
<a href="K01.php?loguit">uitloggen</a>
<a href="admin.php">boys only</a>
</body>
</html>
