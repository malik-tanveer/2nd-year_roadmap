
---

## 🧠 **PHP Sessions & Cookies**

### **📘 Overview**

In this lesson, we learned about **Sessions** and **Cookies** in PHP — both used to store user data temporarily, but in different ways.

---

## 🧩 **1️⃣ PHP Session**

### **📖 What is a Session?**

* A **Session** is used to store data on the **server side** temporarily.
* It allows information to be shared across multiple pages.
* Session data is lost when the browser or tab is closed (unless saved otherwise).

### **🧠 How it works**

1. When a session starts, PHP assigns a unique session ID to the user.
2. This ID is used to access stored data on the server.
3. You can store and access variables using `$_SESSION`.

---

### **📄 Example – session.php**

```php
<?php
session_start();

if(isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "admin" && $password == "12345") {
        $_SESSION['username'] = $username;
        echo "✅ Welcome, " . $_SESSION['username'];
        echo "<br><a href='logout.php'>Logout</a>";
    } else {
        echo "❌ Invalid username or password";
    }
}
?>
```

### **📄 logout.php**

```php
<?php
session_start();
session_destroy();
echo "👋 You are logged out successfully.";
?>
```

### **🧪 Steps**

1. User enters `admin` and `12345`.
2. Data is stored in `$_SESSION`.
3. Page can now access username until the session is destroyed or the tab is closed.

---

## 🍪 **2️⃣ PHP Cookies**

### **📖 What is a Cookie?**

* A **Cookie** stores data on the **client (browser)** side.
* It can stay even after refreshing the page or reopening the browser (until it expires).
* You can control how long a cookie should stay valid.

---

### **📄 Example Files**

#### **set_cookie.php**

```php
<?php
setcookie("user", "Kazmi", time() + 30, "/"); 
echo "✅ Cookie 'user' has been set (expires after 30 seconds).<br>";
echo '<a href="read_cookie.php">Read Cookie</a>';
?>
```

#### **read_cookie.php**

```php
<?php
if(isset($_COOKIE["user"])) {
    echo "👤 Cookie Value: " . $_COOKIE["user"] . "<br>";
    echo '<a href="delete_cookie.php">Delete Cookie</a>';
} else {
    echo "❌ Cookie not found or expired.<br>";
    echo '<a href="set_cookie.php">Set Cookie Again</a>';
}
?>
```

#### **delete_cookie.php**

```php
<?php
setcookie("user", "", time() - 3600, "/");
echo "🗑️ Cookie deleted successfully.<br>";
echo '<a href="set_cookie.php">Set Cookie Again</a>';
?>
```

---

### **🧪 Steps**

1. Run `set_cookie.php` → cookie created for 30 seconds.
2. Open `read_cookie.php` → shows cookie value.
3. Wait 30 seconds or delete manually → cookie disappears.

---

### **⚖️ Difference Between Session & Cookie**

| Feature          | Session                  | Cookie                |
| ---------------- | ------------------------ | --------------------- |
| Storage Location | Server                   | Client (Browser)      |
| Lifetime         | Until browser/tab closed | Until expiration time |
| Security         | More secure              | Less secure           |
| Example Use      | Login data               | Remember username     |

---
