<?php
echo "<div style='text-align: center'>";
for ($i = 0; $i <= 99; $i++){
    for ($k = 0; $k < $i;$k++){
        echo "*";
    }
    echo "*<br>";
}
echo "</div>";