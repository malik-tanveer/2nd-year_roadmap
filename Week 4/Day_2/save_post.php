<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'db_connect.php';

// Get data from form
$title = $_POST['title'] ?? '';
$content = $_POST['content'] ?? '';

// Validation
if (empty($title) || empty($content)) {
    die("❌ Title and Content cannot be empty!");
}

// Sanitize input
$title = htmlspecialchars($title);
$content = htmlspecialchars($content);

// SQL Query
$sql = "INSERT INTO posts (title, content) VALUES ('$title', '$content')";

if (mysqli_query($conn, $sql)) {
    echo "✅ New post added successfully!";
} else {
    echo "❌ Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
