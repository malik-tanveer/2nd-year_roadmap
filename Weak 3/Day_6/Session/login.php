<?php
session_start(); // Start the session

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Dummy login check (no database yet)
    if ($username == "admin" && $password == "12345") {
        $_SESSION["user"] = $username; // Save to session
        header("Location: dashboard.php"); // Redirect to dashboard
        exit();
    } else {
        echo "<p style='color:red;'>Invalid username or password!</p>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
</head>
<body>
  <h2>Login</h2>
  <form method="POST" action="">
    <p>
        username : admin
        password : 12345
    </p>
    <label>Username:</label>
    <input type="text" name="username" required><br><br>

    <label>Password:</label>
    <input type="password" name="password" required><br><br>

    <button type="submit">Login</button>
  </form>
</body>
</html>
