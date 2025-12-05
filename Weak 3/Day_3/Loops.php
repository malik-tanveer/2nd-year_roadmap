<?php
// 🌐 Day 3 – Loops in PHP
// --------------------------------------------
// Types of Loops in PHP:
// 1. for
// 2. while
// 3. do...while
// 4. foreach
// + break & continue examples
// --------------------------------------------

// 🔁 For Loop — used when the number of iterations is known
echo "<h3>🔁 For Loop</h3>";
$num = 10;
for ($i = 0; $i <= $num; $i++) {
    echo "Number: $i <br>";
}

// 🔄 While Loop — runs while the condition remains true
echo "<h3>🔄 While Loop</h3>";
$count = 1;
while ($count <= 5) {
    echo "Count is: $count <br>";
    $count++;
}

// ♻️ Do...While Loop — runs the block at least once
echo "<h3>♻️ Do...While Loop</h3>";
$n = 1;
do {
    echo "Current Number: $n <br>";
    $n++;
} while ($n <= 5);

// 🍎 Foreach Loop — best for arrays
echo "<h3>🍎 Foreach Loop</h3>";
$fruits = ["Apple", "Banana", "Mango", "Orange", "Pineapple"];
foreach ($fruits as $fruit) {
    echo "I like $fruit <br>";
}

// 🧠 Break & Continue — control the flow inside loops
echo "<h3>🧠 Break & Continue Example</h3>";
for ($i = 0; $i <= 20; $i++) {

    if ($i === 5 || $i === 9) {
        // Skip these numbers
        continue;
    }

    if ($i === 12) {
        // Stop the loop when 12 is reached
        break;
    }

    echo "Value: $i <br>";
}

echo "<br>";

// For Each
$user = [
    "name" => "Ali",
    "age" => 21,
    "country" => "Pakistan"
];

foreach ($user as $key => $value) {
    echo "$key : $value <br>";
}

?>
