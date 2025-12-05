<?php

include "db_connect.php";

$name = $_POST['name'] ?? '';
$father_name = $_POST['father_name'] ?? '';
$class = $_POST['class'] ?? '';

if(empty($name) || empty($father_name) || empty($class)){
    die("please fill all fields");
}

$name = htmlspecialchars($name);
$father_name = htmlspecialchars($father_name);
$class = htmlspecialchars($class);

$sql = "INSERT INTO Day_1 (name , father_name ,class) VALUES ('$name', '$father_name', '$class')";

if(mysqli_query($conn, $sql)){
    echo "<h2>Record Added Successfully</h2>";
    echo "<a href='Week 4/Day_2/Practice/Idx.html'>Add Another</a>";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close();

?>