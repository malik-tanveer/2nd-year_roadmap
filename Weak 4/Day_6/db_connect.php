<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_logout"; // ya koi naya db use karna ho to change karo

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("❌ Connection failed: " . mysqli_connect_error());
} else {
    echo "Server is Ready and Name is : server name : $servername , username : $username , Password :  $password ";
}
?>
