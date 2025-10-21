<?php

// POST Request
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    if (!empty($name) && !empty($email) && !empty($message)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<h2>Form Sumbit Successfully</h2>";
            echo "Name : $name <br>";
            echo "Email : $email <br>";
            echo "Message : $message";
        } else {
            echo "Invalid Email Format";
        }
    } else {
        echo "Please fill all ileds before submitting";
    }

} else {
    echo "No Form Data Received";
}

?>