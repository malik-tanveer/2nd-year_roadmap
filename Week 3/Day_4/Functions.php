<?php

echo "<h2>Functions in PHP</h2>";

echo "<hr>";

echo "<h4>Basic Function in PHP</h4>";


// Basic Function in PHP
function greatUser(){
    echo "Hello i am First User";
}
greatUser();

echo "<br>";
echo "<hr>";

// Fun with Parameters

echo "<h4>Function With Parameters</h4>";

function sayHello($name){
    echo "Hello, $name Have a Great Day!.<br>";
}

sayHello("Javed");
sayHello("Kazmi Khan");

echo "<hr>";

// Function with Para & Return value
echo "<h4>Function with Parameters & Return value</h4>";
function addnums($num1 , $num2){
    $sum = $num1 + $num2;
    return $sum;
}

echo addnums(10,20);
echo '<br>';
echo '<br>';

$a1 = 20;
$a2 = 40;
$res = addnums($a1,$a2);
echo "The sum of $a1 and $a2 is: $res<br>";

echo "<hr>";

echo "<h4>Function with Default Parameter</h4>";
// Fun with Default Parameter

function greet($name = "Guest"){
    echo "Welcome , $name!<br>";
}
greet("Gafhoor");
greet();

echo "<hr>";

// Function in Student Marks
echo "<h4>Function for Student Marks</h4>";

function avg($math, $science, $english){
    $average = ($math + $science + $english);
    return $average;
}

$stu_1 = avg(20,40,57);
$stu_2 = avg(53,89,43);


echo "Student 1 is Average $stu_1<br>";
echo "Student 2 is Average $stu_2<br>";



?>