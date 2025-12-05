
**Week 3 / Day 2** folder me rakh sakte ho.

````markdown
# Day 2 – Variables, Data Types & Operators (PHP)

## 📌 Concepts Covered

1. **PHP Variables**
2. **Data Types**
3. **Constants**
4. **Arithmetic Operators**
5. **Comparison Operators**
6. **Logical Operators**
7. **Increment/Decrement Operators**
8. **Assignment Operators**

---

## 1️⃣ PHP Variables

Variables in PHP are used to store values.  
Syntax:

```php
<?php
$name = "Kazmi";
$age = 20;
$price = 99.99;
$isStudent = true;
?>
````

* Variables are **loosely typed**, so you don’t need to define the type explicitly.
* Variable names always start with a `$` sign.

---

## 2️⃣ Data Types

Some basic PHP data types:

| Type    | Example                         |
| ------- | ------------------------------- |
| String  | `"Hello World"`                 |
| Integer | `20`                            |
| Float   | `99.99`                         |
| Boolean | `true` / `false`                |
| Array   | `["PHP", "JavaScript", "Java"]` |

Example:

```php
<?php
$name = "Kazmi";        // String
$age = 20;              // Integer
$price = 99.99;         // Float
$isStudent = true;      // Boolean
$fruits = ["Apple", "Banana", "Mango"];  // Array
?>
```

---

## 3️⃣ Constants

Constants are values that **cannot be changed once defined**.

```php
<?php
define("SITE_NAME", "MyWebsite");
echo SITE_NAME; // Output: MyWebsite
?>
```

* Constants are accessible in the **global scope**.
* Usually written in **uppercase**.

---

## 4️⃣ Arithmetic Operators

PHP arithmetic operators:

```php
<?php
$x = 10;
$y = 5;

echo $x + $y; // 15
echo $x - $y; // 5
echo $x * $y; // 50
echo $x / $y; // 2
echo $x % $y; // 0
?>
```

---

## 5️⃣ Comparison Operators

```php
<?php
$a = 10;
$b = 5;

var_dump($a == $b);   // Equal? false
var_dump($a != $b);   // Not equal? true
var_dump($a > $b);    // Greater? true
var_dump($a < $b);    // Less? false
var_dump($a >= $b);   // Greater or equal? true
var_dump($a <= $b);   // Less or equal? false
?>
```

---

## 6️⃣ Logical Operators

```php
<?php
$x = true;
$y = false;

var_dump($x && $y);   // AND -> false
var_dump($x || $y);   // OR  -> true
var_dump(!$x);        // NOT -> false
?>
```

---

## 7️⃣ Increment / Decrement Operators

```php
<?php
$num = 5;

echo ++$num; // Pre-increment -> 6
echo $num++; // Post-increment -> 6 (then $num = 7)
echo --$num; // Pre-decrement -> 6
echo $num--; // Post-decrement -> 6 (then $num = 5)
?>
```

---

## 8️⃣ Assignment Operators

```php
<?php
$x = 10;
$x += 5;  // $x = $x + 5 -> 15
$x -= 3;  // $x = $x - 3 -> 12
$x *= 2;  // $x = $x * 2 -> 24
$x /= 4;  // $x = $x / 4 -> 6
$x %= 3;  // $x = $x % 3 -> 0
?>
```

---

## ✅ Summary

* PHP **variables** are dynamic; you don’t need to define types.
* **Data types**: string, int, float, bool, array.
* **Constants** cannot be changed once defined.
* Operators allow arithmetic, comparison, logical, increment/decrement, and assignment operations.

