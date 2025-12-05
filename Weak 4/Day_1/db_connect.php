<?php
// Step 1: Connection variables
$servername = "localhost";
$username = "root";  // XAMPP/LAMP default username
$password = null;      // default: empty
$dbname = "practice"; // your database name

// Step 2: Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


// Step 3: Check connection
if (!$conn) {
    die("❌ Connection failed: " . mysqli_connect_error());
} else {
    echo "✅ Connected successfully to the database!";
}
?>
