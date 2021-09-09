<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        .crimson{border: crimson solid 5px;}
        .black{border: black solid 5px;
    </style>
</head>
<body>

</body>
</html>
<?php
echo "<div>";

for ($i = 1; $i <= 10; $i++){

    if ($i % 2 == 0){
        $class = "class ='crimson'";
    } else {
        $class = "class ='black'";
    }

    echo "<img ".$class."src='../img/apen/aap".$i.".jpg'>";
}
echo "</div>";
?>