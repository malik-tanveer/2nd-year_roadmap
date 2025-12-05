<?php
// every Index start a  like banana , apple, mango is a num 1 is a apple and banana is 0 and browser is show a 1 index
echo "Array's in PHP";

$arr = [
    "Apple", "Banana", "Juice", "etc."
];

echo "<br>";
print_r($arr);
echo "<br>";

echo $arr[0]; // Array Element 1
echo "<br>";
echo $arr[1]; // Array Element 1
echo "<br>";
echo $arr[2]; // Array Element 1
echo "<br>";

echo "My Favorite is " . $arr[1] . "<br>";

// Print a Array through Array

foreach($arr as $arrs){
    echo "<br>$arrs";
}

// Associative Array

$stu_marks = [
    "Ali" => 40,
    "Hamza" => 60,
    "Hassan" => 76,
    "Raza" => 21
];
echo "<br>";
echo "<br>";

echo " Marks is Ali ". $stu_marks[ "Ali"]."<br>";

// Loop Through Associative Array Print
echo "<br>";
echo "<br>";


foreach ($stu_marks as $name => $marks){
    echo "Name $name And $marks Marks.
    <br>";
}

// Multidimensional Array
$students = [
    ["Name" => "Ali", "Age" => 20, "Marks" => 85],
    ["Name" => "Sara", "Age" => 21, "Marks" => 90],
    ["Name" => "Ahmed", "Age" => 19, "Marks" => 78]
];

echo "<br>";

echo " My Name is " . $students[0]['Name'] ."<br>";
echo " My Age is " . $students[0]['Age'] ." Years <br>";

echo "<br>";

foreach($students as $student){
    echo "Name: {$student['Name']}, Age: {$student['Age']}, Marks: {$student['Marks']}<br>";
};

$colors = ["red", "Green", "BLue", "Orange", "Yellow","Black", "White"];

echo "'<br>";

// 🔹 count() → total elements
echo "Total Colors: " . count($colors) . "<br>";

echo "'<br>";

// 🔹 sort() → sort array alphabetically
sort($colors);
echo "Sorted Colors: ";
print_r($colors);

echo "<br>";
echo "<br>";

$colorString = implode(", ", $colors);
echo "Colors String: $colorString<br>";

echo "<br>";

// 🔹 explode() → convert string to array
$newArray = explode(", ", $colorString);
print_r($newArray);

?>