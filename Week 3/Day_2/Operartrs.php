<?php

    echo "<h1> Operators </h1>";
    // Arithmetic Operators

    //  +, -, /, * ,%
    
    $num1 = 20;
$num2 = 6;

echo "<h3>Arithmetic Operators in PHP</h3>";

echo "Addition (+): " . ($num1 + $num2) . "<br>";
echo "Subtraction (-): " . ($num1 - $num2) . "<br>";
echo "Multiplication (*): " . ($num1 * $num2) . "<br>";
echo "Division (/): " . ($num1 / $num2) . "<br>";
echo "Modulus (%): " . ($num1 % $num2) . "<br>";

// Comparison Operators
// ==, ===, !=, <, >, <=, >=).


$a = 10;
$b = 20;

echo "<h3>Comparison Operators in PHP</h3>";

echo "Equal (==): ";
var_dump($a == $b);
echo "<br>";

echo "Identical (===): ";
var_dump($a === $b);
echo "<br>";

echo "Not Equal (!=): ";
var_dump($a != $b);
echo "<br>";

echo "Greater Than (>): ";
var_dump($a > $b);
echo "<br>";

echo "Less Than (<): ";
var_dump($a < $b);
echo "<br>";

echo "Greater or Equal (>=): ";
var_dump($a >= $b);
echo "<br>";

echo "Less or Equal (<=): ";
var_dump($a <= $b);
echo "<br>";


echo "<h3>Comparison Operators in PHP</h3>";
// && || !
$c = true;
$d = false;

echo ($c && $d);   // false (0) → because both are not true
echo "<br>";
echo ($c || $d);   // true (1)  → because at least one is true
echo "<br>";
echo (!$c);


echo "<h3>Assignment Operators in PHP</h3>";

// Simple assignment
$x = 10;
echo "Simple assignment (=): x = 10 → x = $x<br>";

// Add AND assignment
$x += 5; // x = x + 5
echo "Add AND assignment (+=): x += 5 → x = $x<br>";

// Subtract AND assignment
$x -= 3; // x = x - 3
echo "Subtract AND assignment (-=): x -= 3 → x = $x<br>";

// Multiply AND assignment
$x *= 2; // x = x * 2
echo "Multiply AND assignment (*=): x *= 2 → x = $x<br>";

// Divide AND assignment
$x /= 4; // x = x / 4
echo "Divide AND assignment (/=): x /= 4 → x = $x<br>";

// Modulus AND assignment
$x %= 3; // x = x % 3
echo "Modulus AND assignment (%=): x %= 3 → x = $x<br>";


// Increment/Decrement
//  a++ , ++a , --a , a--

echo "<h3>Increment / Decrement Operators in PHP</h3>";

// Starting value
$num = 5;
echo "Initial value: num = $num<br>";

// Increment by 1 (pre-increment)
echo "Pre-increment (++num): " . (++$num) . "<br>";

// Increment by 1 (post-increment)
echo "Post-increment (num++): " . ($num++) . "<br>";
echo "Value after post-increment: num = $num<br>";

// Decrement by 1 (pre-decrement)
echo "Pre-decrement (--num): " . (--$num) . "<br>";

// Decrement by 1 (post-decrement)
echo "Post-decrement (num--): " . ($num--) . "<br>";
echo "Value after post-decrement: num = $num<br>";

?>