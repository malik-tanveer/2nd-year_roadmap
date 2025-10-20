
---

## 🗓 **Day 3 – Conditional Statements & Loops**

### 🎯 **Goal:**

Learn how to control the flow of your PHP program using **conditional statements** and **loops**.

---

## 🧩 **1️⃣ Conditional Statements**

Conditional statements let your code make **decisions** based on certain conditions (true or false).

### 🧠 **Types:**

* `if`
* `if...else`
* `if...elseif...else`
* `switch`

---

### ✅ **Example 1: Simple `if` Statement**

```php
<?php
$age = 18;

if ($age >= 18) {
    echo "You are eligible to vote. Your age is $age.<br>";
}
?>
```

✔ **Explanation:**
If `$age` is greater than or equal to 18, it prints the message. Otherwise, it skips it.

---

### ✅ **Example 2: `if...else` Statement**

```php
<?php
$marks = 75;

if ($marks >= 50) {
    echo "You passed the exam with $marks marks.<br>";
} else {
    echo "You failed the exam with $marks marks.<br>";
}
?>
```

✔ **Explanation:**
When the condition is true → first block runs, otherwise the `else` block runs.

---

### ✅ **Example 3: `if...elseif...else` Chain**

```php
<?php
$temperature = 25;

if ($temperature < 10) {
    echo "It's cold outside.<br>";
} elseif ($temperature < 30) {
    echo "The weather is pleasant.<br>";
} else {
    echo "It's a hot day.<br>";
}
?>
```

✔ **Explanation:**
Multiple conditions are checked one by one until one is true.

---

### ✅ **Example 4: `switch` Statement**

```php
<?php
$day = "Friday";

switch ($day) {
    case "Monday":
        echo "Start of the week!";
        break;
    case "Friday":
        echo "Jummah Mubarak!";
        break;
    case "Sunday":
        echo "Enjoy your rest day!";
        break;
    default:
        echo "Just another day!";
}
?>
```

✔ **Explanation:**
Used when you have **many fixed values** to compare. It’s cleaner than multiple `if` statements.

---

## 🔁 **2️⃣ Loops in PHP**

Loops allow you to **repeat a block of code** multiple times until a condition is met.

---

### ✅ **Example 1: `for` Loop**

```php
<?php
for ($i = 1; $i <= 5; $i++) {
    echo "Number: $i <br>";
}
?>
```

✔ **Explanation:**
Starts from 1, runs until 5, and increases `$i` by 1 each time.

---

### ✅ **Example 2: `while` Loop**

```php
<?php
$count = 1;
while ($count <= 5) {
    echo "Count: $count <br>";
    $count++;
}
?>
```

✔ **Explanation:**
Checks the condition **before** running the loop body.

---

### ✅ **Example 3: `do...while` Loop**

```php
<?php
$n = 1;
do {
    echo "Current Number: $n <br>";
    $n++;
} while ($n <= 5);
?>
```

✔ **Explanation:**
This loop runs **at least once**, even if the condition is false.

---

### ✅ **Example 4: `foreach` Loop (for Arrays)**

```php
<?php
$fruits = ["Apple", "Banana", "Mango", "Orange"];

foreach ($fruits as $fruit) {
    echo "I like $fruit.<br>";
}
?>
```

✔ **Explanation:**
Used to loop through arrays — automatically gives you each value without needing an index.

---

### ✅ **Example 5: `break` and `continue`**

```php
<?php
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        continue; // skips 5
    }
    if ($i == 8) {
        break; // stops the loop
    }
    echo "Value: $i <br>";
}
?>
```

✔ **Explanation:**

* `continue` → skips the current iteration
* `break` → completely exits the loop

---

## 🧮 **Practice Examples**

### 🔹 **Even & Odd Number Checker**

```php
<?php
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo "$i is Even<br>";
    } else {
        echo "$i is Odd<br>";
    }
}
?>
```

---

### 🔹 **Multiplication Table**

```php
<?php
$number = 5;

echo "<h2>Multiplication Table of $number</h2>";

for ($i = 1; $i <= 10; $i++) {
    $result = $number * $i;
    echo "$number × $i = $result <br>";
}
?>
```

---

## 💡 **Mini Tips**

✅ Use `switch` when checking multiple fixed values.
✅ `foreach` is best for arrays — it’s clean and simple.
✅ Always remember to **break** your switch cases.
✅ `do...while` always runs at least once.

---

### 🧾 **Summary**

| Topic                    | Description                              |
| ------------------------ | ---------------------------------------- |
| if / else / elseif       | Decision making based on conditions      |
| switch                   | Compare one variable with multiple cases |
| for / while / do...while | Repeat code blocks                       |
| foreach                  | Loop through arrays                      |
| break / continue         | Control loop execution                   |

---

