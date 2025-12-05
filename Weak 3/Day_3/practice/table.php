<?php

$num = 5;
echo "<h2>📘 Multiplication Table of $num</h2>";

for($i = 1; $i <= 10; $i++){
    $res = $num * $i;
    echo "$num × $i = $res <br>";
}

?>