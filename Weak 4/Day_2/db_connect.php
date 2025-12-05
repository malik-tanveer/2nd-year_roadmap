<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = ""; // Default for XAMPP/LAMP
$dbname = "blogs"; // <-- Your new database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("❌ Connection failed: " . mysqli_connect_error());
} else {
    // Optional success log (you can comment this out later)
    echo "✅ Connected successfully to database: $dbname";
}

// Make sure uploads folder exists
$uploadDir = __DIR__ . "/uploads";
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}
?>
