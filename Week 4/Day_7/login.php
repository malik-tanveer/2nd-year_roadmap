<?php
// login.php
session_start();
include 'db_connect.php';
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    $stmt = mysqli_prepare($conn, "SELECT id, password FROM users WHERE username = ?");
    mysqli_stmt_bind_param($stmt, 's', $username);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $id, $hash);
    if (mysqli_stmt_fetch($stmt)) {
        if (password_verify($password, $hash)) {
            $_SESSION['user_id'] = $id;
            $_SESSION['username'] = $username;
            header('Location: admin/dashboard.php');
            exit;
        } else {
            $message = '❌ Incorrect password.';
        }
    } else {
        $message = '⚠️ User not found.';
    }
    mysqli_stmt_close($stmt);
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Login</title>
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

    .login-container {
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
        color: red;
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

    footer {
        text-align: center;
        font-size: 14px;
        color: #6b7280;
        margin-top: 20px;
    }
</style>
</head>
<body>

<div class="login-container">
    <h2>🔐 Admin Login</h2>

    <?php if ($message): ?>
        <p class="message"><?= htmlspecialchars($message) ?></p>
    <?php endif; ?>

    <form method="post">
        <input name="username" placeholder="Username" required>
        <input name="password" type="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>

    <p>Don't have an account? <a href="register.php">Register</a></p>
</div>

</body>
</html>
