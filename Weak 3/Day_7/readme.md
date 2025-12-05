
---

# 🧠 **Mini Project: Contact Form + Session-based Login**

## 🎯 **Goal**

To combine everything we learned in Week 3 — **Forms**, **POST method**, **Sessions**, and **Cookies** — into one working PHP mini project.

This project simulates a **basic login system** and a **contact form** that only works after login.

---

## 🧩 **Project Overview**

We built a small web app with 3 main parts:

1. **Login Page (HTML + CSS + PHP)**
2. **Contact Form (HTML + CSS + PHP)**
3. **Logout System**

Each page has its own HTML + CSS design and a separate PHP file for backend logic.

---

## ⚙️ **How It Works**

### 🪪 **1. Login Page**

File: `login.html` (frontend) + `login.php` (backend)

* User enters **username** and **password**.
* PHP checks the credentials:

  ```php
  if ($username == "admin" && $password == "12345")
  ```
* If correct → a **session** starts and the user is redirected to `contact.html`.
* If incorrect → PHP shows an error message.

💡 **Concept Used:**
`session_start()`, `$_POST`, `header("Location: ...")`

---

### 💬 **2. Contact Form Page**

File: `contact.html` (frontend) + `contact.php` (backend)

* Only **logged-in users** can access this page.
* If someone tries to open `contact.html` without login, PHP redirects them back to `login.html`.

```php
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}
```

* Once logged in, the user can fill out the **Contact Form**:

  * Name
  * Email
  * Message

* PHP validates the input and displays it.

* Optionally, the data is also saved in a `messages.txt` file using:

```php
$file = fopen("messages.txt", "a");
fwrite($file, "Name: $name | Email: $email | Message: $message\n");
fclose($file);
```

💡 **Concepts Used:**
`$_SESSION`, `$_POST`, `htmlspecialchars()`, `filter_var()`, `fopen()`, `fwrite()`

---

### 🚪 **3. Logout Page**

File: `logout.php`

When the user clicks **Logout**, the PHP script:

```php
session_start();
session_destroy();
header("Location: login.html");
```

This ends the session and redirects back to the login page.

💡 **Concept Used:**
`session_destroy()` clears all saved session data.

---

## 🧠 **What You Learned**

✅ Handling Forms using POST
✅ Managing user sessions with PHP
✅ Redirecting users using `header()`
✅ Validating user input (name, email, message)
✅ Writing data to files using `fwrite()`
✅ Secure input handling with `htmlspecialchars()`

---

## 💡 **Mini Tip**

> Always use `session_start()` at the top of every page that works with sessions.
> Without it, your session variables will not be available.

---

## 📂 **Project Folder Structure**

```
Day_7/
│
├── login.html
├── login.php
├── contact.html
├── contact.php
├── logout.php
└── messages.txt   (optional)
```

---
