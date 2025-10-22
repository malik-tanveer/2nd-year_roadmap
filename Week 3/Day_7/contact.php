
<?php
session_start();

// Check login
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    if (!empty($name) && !empty($email) && !empty($message)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<h2 style='text-align:center; color:green;'>Form Submitted Successfully!</h2>";
            echo "<p style='text-align:center;'>Name: $name <br> Email: $email <br> Message: $message</p>";

            // Optional: Save to file
            $file = fopen("messages.txt", "a");
            fwrite($file, "Name: $name | Email: $email | Message: $message\n");
            fclose($file);

            echo "<p style='text-align:center;'><a href='contact.html'>Go Back</a></p>";
        } else {
            echo "<h3 style='color:red; text-align:center;'>Invalid Email Format!</h3>";
        }
    } else {
        echo "<h3 style='color:red; text-align:center;'>Please fill all fields!</h3>";
    }
} else {
    header("Location: contact.html");
    exit();
}
?>



