<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        table, tr,td {
            border: black solid 1px;
            border-collapse: collapse ;
        }
        td{
            padding: 20px;
        }
    </style>
</head>
<body>
<table>
<?php
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
$query ="select * from cursist";
$stmt = $conn->prepare($query) or die ("error 1.");
$stmt->execute() or die('error 2.');


while ($row = $stmt->fetch()){
echo "<tr>";
    echo "<td>".$row['cursistnr']."</td>";
    echo "<td>".$row['naam']."</td>";
    echo "<td>".$row['roepnaam']."</td>";
    echo "<td>".$row['straat']."</td>";
    echo "<td>".$row['postcode']."</td>";
    echo "<td>".$row['plaats']."</td>";
    echo "<td>".$row['geslacht']."</td>";
    echo "<td>".$row['geb_datum']."</td>";
echo "</tr>";
}




?>
</table>
</body>
</html>




