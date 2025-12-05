<?php
echo "<br>";
echo " This Number is odd <br>";
$odd = 10;
for ($i = 1; $i <= $odd; $i++) {
    if ($i % 2 == 0) {
        echo "$i is Even<br>";
    }
}

echo "<br>";
echo "This Number is Even";
echo "<br>";
$even = 10;
for ($i = 1; $i <= $even; $i++) {
    if ($i % 2 != 0) {
        echo "$i is odd<br>";
    }
}

?>