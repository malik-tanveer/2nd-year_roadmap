<?php
session_start();

// If user not logged in, redirect back to login page
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
</head>
<body>
  <h2>Welcome, <?php echo $_SESSION["user"]; ?> 👋</h2>
  <p>You are successfully logged in using PHP sessions!</p>
  <a href="logout.php">Logout</a>
</body>
</html>
