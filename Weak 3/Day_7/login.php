
<?php
session_start();

// Fixed credentials
$valid_username = "admin";
$valid_password = "12345";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['username'] = $username;
        header("Location: contact.html");
        exit();
    } else {
        echo "<h3 style='color:red; text-align:center;'>Invalid username or password!</h3>";
        echo "<p style='text-align:center;'><a href='login.html'>Go Back</a></p>";
    }
} else {
    header("Location: login.html");
    exit();
}
?>
 
