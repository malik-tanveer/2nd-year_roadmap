<?php
// db_connect.php
$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = '';
$DB_NAME = 'blog_system';

$conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if (!$conn) {
    die("DB Connection failed: " . mysqli_connect_error());
} else {
    echo "__";
}
mysqli_set_charset($conn, 'utf8mb4');
?>
