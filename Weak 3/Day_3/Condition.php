<?php
// 🧠 Conditional Statements in PHP
// Demonstrating: if, if-else, elseif, and switch statements

// --------------------------------------
// ✅ Example 1: Simple If Condition
// --------------------------------------
$age = 18;

if ($age >= 18) {
    echo "✅ You are eligible to vote. Your age is $age.<br><br>";
}

// --------------------------------------
// ✅ Example 2: If-Else Condition
// --------------------------------------
$marks = 100;

if ($marks > 90) {
    echo "🎉 Excellent! You passed with $marks marks.<br><br>";
} else {
    echo "❌ You did not meet the required marks. Your score: $marks.<br><br>";
}

// --------------------------------------
// ✅ Example 3: If–Elseif–Else Chain
// --------------------------------------
$temperature = 40;

if ($temperature < 10) {
    echo "🥶 It's cold outside.<br><br>";
} elseif ($temperature < 30) {
    echo "🌤 The weather is pleasant.<br><br>";
} elseif ($temperature > 70) {
    echo "🔥 It's extremely hot! Stay hydrated.<br><br>";
} else {
    echo "☀️ The weather is warm. Temperature: $temperature°C<br><br>";
}

// --------------------------------------
// ✅ Example 4: Switch Statement
// --------------------------------------
$day = "Friday";

switch ($day) {
    case "Monday":
        echo "📅 Start of the week! Time to plan ahead.<br>";
        break;

    case "Friday":
        echo "🕌 Jummah Mubarak! Have a blessed Friday.<br>";
        break;

    case "Sunday":
        echo "😎 Enjoy your rest day! It's Sunday.<br>";
        break;

    default:
        echo "📆 Just another regular day.<br>";
        break;
}
?>
