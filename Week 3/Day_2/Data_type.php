<?php
echo "<h2>PHP Data Types Example</h2>";

// ========== String ==========
$name = "Kazmi";
echo "<h3>String</h3>";
echo "Name: $name<br>";

// ========== Integer ==========
$age = 22;
echo "<h3>Integer</h3>";
echo "Age: $age<br>";

// ========== Float ==========
$height = 5.9;
echo "<h3>Float</h3>";
echo "Height: $height<br>";

// ========== Boolean ==========
$isStudent = true;
echo "<h3>Boolean</h3>";
echo "Is Student: ";
var_dump($isStudent);
echo "<br>";

// ========== Array ==========
$fruits = array("Apple", "Banana", "Mango");
echo "<h3>Array</h3>";
echo "Fruits: ";
print_r($fruits);
echo "<br>";

// ========== NULL ==========
$car = NULL;
echo "<h3>NULL</h3>";
echo "Car: ";
var_dump($car);
echo "<br>";

// ========== Constant ==========
define("SCHOOL", "Bright Future Academy");
echo "<h3>Constant</h3>";
echo "School: " . SCHOOL . "<br>";
?>
