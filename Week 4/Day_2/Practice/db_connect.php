
<?php

$servername = "localhost";
$username = "root";
$password = ""; // Default for XAMPP/LAMP
$dbname = "practice"; // <-- Your new database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("❌ Connection failed: " . mysqli_connect_error());
} else {
    // Optional success log (you can comment this out later)
    echo "✅ Connected successfully to database: $dbname";
}

?>