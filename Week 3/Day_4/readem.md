
---

## 🗓 **Day 4 – Functions & Arrays**

### 🎯 **Goal:**

Learn how to create and use **functions** and **arrays** in PHP — understand how to organize data and reuse logic effectively.

---

## 🔹 **Functions in PHP**

### 1. **Basic Function**

A function is a reusable block of code that performs a specific task.

```php
<?php
function greetUser() {
    echo "Hello! Welcome to PHP Functions.<br>";
}

greetUser(); // Function call
?>
```

---

### 2. **Function with Parameters**

You can pass data (parameters) into functions.

```php
<?php
function sayHello($name) {
    echo "Hello, $name! Have a great day!<br>";
}

sayHello("Ali");
sayHello("Sara");
?>
```

---

### 3. **Function with Parameters & Return Value**

Functions can return a value instead of just printing it.

```php
<?php
function addNumbers($num1, $num2) {
    $sum = $num1 + $num2;
    return $sum;
}

echo "Sum: " . addNumbers(10, 20);
?>
```

---

### 4. **Function with Default Parameter**

If no value is passed, the default one is used.

```php
<?php
function greet($name = "Guest") {
    echo "Welcome, $name!<br>";
}

greet("Kazmi");
greet(); // Uses default parameter
?>
```

---

### 5. **Function Example – Student Marks**

You can calculate and display results using functions.

```php
<?php
function averageMarks($math, $science, $english) {
    $average = ($math + $science + $english) / 3;
    return $average;
}

$student1 = averageMarks(80, 90, 70);
$student2 = averageMarks(60, 85, 75);

echo "Student 1 Average: $student1<br>";
echo "Student 2 Average: $student2<br>";
?>
```

---

## 🔹 **Arrays in PHP**

### 1. **Indexed Array**

Stores multiple values in a single variable.

```php
<?php
$fruits = ["Apple", "Banana", "Mango", "Orange"];

echo $fruits[0]; // Apple
echo "<br>My favorite fruit is " . $fruits[2] . "<br>";

foreach ($fruits as $fruit) {
    echo "Fruit: $fruit<br>";
}
?>
```

---

### 2. **Associative Array**

Stores data using key–value pairs.

```php
<?php
$studentMarks = [
    "Ali" => 85,
    "Sara" => 90,
    "Hassan" => 75
];

foreach ($studentMarks as $name => $marks) {
    echo "$name scored $marks marks.<br>";
}
?>
```

---

### 3. **Multidimensional Array**

Array inside another array (used for structured data).

```php
<?php
$students = [
    ["Name" => "Ali", "Age" => 20, "Marks" => 85],
    ["Name" => "Sara", "Age" => 21, "Marks" => 90],
    ["Name" => "Ahmed", "Age" => 19, "Marks" => 78]
];

foreach ($students as $student) {
    echo "Name: {$student['Name']}, Age: {$student['Age']}, Marks: {$student['Marks']}<br>";
}
?>
```

---

## 🔹 **Array Functions**

### 1. `count()` → Counts total elements in an array.

### 2. `sort()` → Sorts an array alphabetically.

### 3. `implode()` → Converts array into a string.

### 4. `explode()` → Converts string back into an array.

```php
<?php
$colors = ["Red", "Green", "Blue", "Yellow", "Black"];

echo "Total Colors: " . count($colors) . "<br>";

sort($colors);
print_r($colors);

$colorString = implode(", ", $colors);
echo "<br>Colors String: $colorString<br>";

$newArray = explode(", ", $colorString);
print_r($newArray);
?>
```

---

## 🧠 **Mini Tip:**

> Keep your functions **reusable** — don’t repeat logic.
> Arrays help you store and manage multiple values efficiently.

---

## ✅ **What You Learned**

* How to define and call **functions**
* Use **parameters** and **return values**
* Work with **indexed**, **associative**, and **multidimensional arrays**
* Useful array functions: `count()`, `sort()`, `implode()`, `explode()`

---

