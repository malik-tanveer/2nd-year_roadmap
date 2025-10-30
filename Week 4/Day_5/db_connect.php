<?php

$servername = "localhost";
$username = "root";  
$password = null;    
$dbname = "day_3_read";

$conn = mysqli_connect($servername, $username, $password, $dbname);


// Step 3: Check connection
if (!$conn) {
    die("❌ Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully to the database $dbname";
}
?>