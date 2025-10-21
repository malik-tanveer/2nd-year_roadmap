
---

````
# 🗓 PHP Forms (GET & POST Methods)

## Goal:
Learn how to create an HTML form and handle data using PHP with **GET** and **POST** methods.

---

## 🧠 What We Learned

### 1. HTML Form + PHP Backend
We created an HTML form that sends user input to a PHP file for processing.

```html
<form action="form.php" method="POST">
  <label>Name:</label>
  <input type="text" name="name" required><br><br>

  <label>Email:</label>
  <input type="email" name="email" required><br><br>

  <label>Message:</label><br>
  <textarea name="message" rows="5" cols="30"></textarea><br><br>

  <button type="submit">Submit</button>
</form>
````

---

### 2. Handling POST Request in PHP

POST method sends data **securely** (not visible in URL).

```php
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    if (!empty($name) && !empty($email) && !empty($message)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<h2>Form Submitted Successfully ✅</h2>";
            echo "Name: $name <br>";
            echo "Email: $email <br>";
            echo "Message: $message";
        } else {
            echo "❌ Invalid Email Format";
        }
    } else {
        echo "⚠️ Please fill all fields before submitting";
    }
} else {
    echo "No Form Data Received";
}
?>
```

🧩 **Explanation:**

* `$_SERVER['REQUEST_METHOD']` → checks if the form was submitted using POST.
* `htmlspecialchars()` → prevents XSS by escaping HTML special characters.
* `filter_var()` → validates email format.
* Data is *not* shown in the URL — safer for sensitive data.

---

### 3. Handling GET Request in PHP

GET method sends data through the **URL** — useful for searches or filters.

```php
<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $name = htmlspecialchars($_GET["name"]);
    $email = htmlspecialchars($_GET["email"]);
    $message = htmlspecialchars($_GET["message"]);

    echo "<h2>GET Form Submitted ✅</h2>";
    echo "Name: $name <br>";
    echo "Email: $email <br>";
    echo "Message: $message";
}
?>
```

📍 Example URL after form submission:

```
http://localhost/day5/get.php?name=John&email=john@gmail.com&message=Hello
```

---

## ⚖️ Difference Between GET and POST

| Feature           | GET                   | POST                         |
| ----------------- | --------------------- | ---------------------------- |
| Data Visibility   | Visible in URL        | Hidden from URL              |
| Data Length Limit | Limited (~2048 chars) | No Limit                     |
| Use Case          | Search, Filters       | Login, Forms, Sensitive Data |
| Security          | Less secure           | More secure                  |
| Bookmarkable      | Yes                   | No                           |


---

