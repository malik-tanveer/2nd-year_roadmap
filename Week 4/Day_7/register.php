<?php
// register.php
include 'db_connect.php';
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($username === '' || $password === '') {
        $message = '⚠️ Please fill all fields.';
    } else {
        $stmt = mysqli_prepare($conn, "SELECT id FROM users WHERE username = ?");
        mysqli_stmt_bind_param($stmt, 's', $username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        if (mysqli_stmt_num_rows($stmt) > 0) {
            $message = '❌ Username already taken.';
        } else {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $ins = mysqli_prepare($conn, "INSERT INTO users (username, password) VALUES (?, ?)");
            mysqli_stmt_bind_param($ins, 'ss', $username, $hash);
            if (mysqli_stmt_execute($ins)) {
                $message = '✅ Registration successful! <a href="login.php">Login now</a>';
            } else {
                $message = '❌ Registration failed: ' . mysqli_error($conn);
            }
            mysqli_stmt_close($ins);
        }
        mysqli_stmt_close($stmt);
    }
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Register</title>
<style>
    body {
        font-family: 'Segoe UI', Tahoma, sans-serif;
        background-color: #f8fafc;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .register-container {
        background-color: #fff;
        padding: 40px 30px;
        border-radius: 12px;
        box-shadow: 0 6px 16px rgba(0,0,0,0.08);
        width: 100%;
        max-width: 400px;
        text-align: center;
    }

    h2 {
        color: #1e3a8a;
        margin-bottom: 20px;
    }

    form {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    input {
        padding: 10px 12px;
        border-radius: 6px;
        border: 1px solid #ccc;
        font-size: 16px;
    }

    input:focus {
        border-color: #2563eb;
        outline: none;
        box-shadow: 0 0 4px rgba(37,99,235,0.3);
    }

    button {
        background-color: #2563eb;
        color: white;
        border: none;
        padding: 10px;
        border-radius: 6px;
        font-size: 16px;
        cursor: pointer;
        transition: background 0.3s;
    }

    button:hover {
        background-color: #1e40af;
    }

    .message {
        color: #e11d48;
        margin-bottom: 10px;
        font-weight: 500;
    }

    a {
        color: #2563eb;
        text-decoration: none;
        font-weight: 500;
    }

    a:hover {
        text-decoration: underline;
    }
</style>
</head>
<body>

<div class="register-container">
    <h2>🧾 Register Account</h2>

    <?php if ($message): ?>
        <p class="message"><?= $message ?></p>
    <?php endif; ?>

    <form method="post">
        <input name="username" placeholder="Choose a username" required>
        <input name="password" type="password" placeholder="Create a password" required>
        <button type="submit">Register</button>
    </form>

    <p>Already registered? <a href="login.php">Login here</a></p>
</div>

</body>
</html>
