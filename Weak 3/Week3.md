
---

# 🧠 **Week 3 → PHP Basics**

## 🎯 **Goal:**

PHP environment, syntax, forms, and session handling samajhna — aur ek basic dynamic web project banana.

---

### 🗓 **Day 1 – Environment Setup & PHP Intro**

**Concepts:**

* Install & setup **XAMPP / WAMP / LAMP** (for Kali Linux → LAMP best hai)
* Folder structure: `htdocs/your_project`
* How PHP files run (`localhost` / `127.0.0.1`)
* PHP basic syntax: `<?php ... ?>`

**Practice:**

* Create `index.php`
* Print "Hello PHP!"
* Understand `echo` vs `print`

**Mini Tip:**
Always save files in the `htdocs` folder for Apache to access.

---

### 🗓 **Day 2 – Variables, Data Types & Operators**

**Concepts:**

* PHP variables: `$name = "Kazmi";`
* Data types: string, int, float, bool, array
* Constants: `define("SITE", "MyWebsite");`
* Arithmetic, Comparison, and Logical Operators

**Practice:**

* Make a calculator page using PHP operators
* Display results using `echo`

**Mini Tip:**
PHP is *loosely typed* — no need to define variable types.

---

### 🗓 **Day 3 – Conditional Statements & Loops**

**Concepts:**

* `if`, `else`, `elseif`, `switch`
* Loops: `for`, `while`, `do while`, `foreach`
* `break` & `continue`

**Practice:**

* Create a number checker (odd/even)
* Make a loop to print a multiplication table

**Mini Tip:**
Use `foreach` for arrays — it’s cleaner and easier.

---

### 🗓 **Day 4 – Functions & Arrays**

**Concepts:**

* User-defined functions
* Parameters & return values
* Arrays: indexed, associative, multidimensional
* `implode()`, `explode()`, `count()`, `sort()`

**Practice:**

* Make a function that adds 2 numbers
* Display student marks using associative array

**Mini Tip:**
Keep functions reusable — avoid repeating logic in different files.

---

### 🗓 **Day 5 – Forms (GET & POST Methods)**

**Concepts:**

* HTML form with PHP backend
* `$_GET` and `$_POST` superglobals
* Handling form data securely

**Practice:**

* Create a form to collect user info and display it on another page
* Validate empty fields

**Mini Tip:**
Always sanitize user input using `htmlspecialchars()` or `filter_input()`.

---

### 🗓 **Day 6 – Sessions & Cookies**

**Concepts:**

* Difference between Session & Cookie
* `session_start()`, `$_SESSION`, `setcookie()`, `$_COOKIE`
* Login simulation using sessions

**Practice:**

* Make a login form (no DB yet)
* If logged in → show “Welcome”, else → redirect to login page

**Mini Tip:**
Sessions store data on the server; cookies store it on the user’s browser.

---

### 🗓 **Day 7 – Mini Project: Contact Form + Session-based Login**

**Goal:**
Combine everything you learned into a small working project.

**Project Tasks:**

1. Create a **Contact Form** (name, email, message)
2. Save data to **MySQL DB** using `mysqli_connect()`
3. Add a **Login System** using sessions
4. Display submitted messages only after login

**Bonus:**
Add basic validation (required fields + email format check)

**Mini Tip:**
Use `try...catch` (or `if(!$conn)` blocks) to handle DB errors gracefully.

---

### 💡 **Pro Tip (for Week 3):**

> Focus on **form validation + database interaction** first.
> Once it runs locally → polish the UI later (HTML/CSS).

---
