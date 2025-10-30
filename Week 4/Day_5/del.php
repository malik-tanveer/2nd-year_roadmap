<?php
include('db_connect.php');

if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("<p style='color:red; text-align:center;'>❌ Invalid request. No ID found.</p>");
}

$id = (int) $_GET['id'];

// Delete query
$sql = "DELETE FROM read_opera WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    echo "<p style='color:green; text-align:center;'>✅ Post deleted successfully!</p>";
    echo "<p style='text-align:center;'><a href='create.php'>⬅️ Back to Add Post</a></p>";
} else {
    echo "<p style='color:red; text-align:center;'>❌ Error deleting post: " . mysqli_error($conn) . "</p>";
}
?>
