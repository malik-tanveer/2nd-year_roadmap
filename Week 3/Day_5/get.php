
<?php

// GET Request
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['name'])) {
    $name = htmlspecialchars($_GET["name"]);
    $email = htmlspecialchars($_GET["email"]);
    $message = htmlspecialchars($_GET["message"]);

    if (!empty($name) && !empty($email) && !empty($message)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<h2>Form Submitted Successfully (GET)</h2>";
            echo "Name : $name <br>";
            echo "Email : $email <br>";
            echo "Message : $message";
        } else {
            echo "Invalid Email Format";
        }
    } else {
        echo "Please fill all fields before submitting";
    }

} else {
    echo "No Form Data Received";
}

?>
