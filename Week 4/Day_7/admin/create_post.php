<?php
session_start();
if (!isset($_SESSION['user_id'])) { header('Location: ../login.php'); exit; }
include '../db_connect.php';
$msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title'] ?? '');
    $content = trim($_POST['content'] ?? '');
    $imageName = null;

    if ($title === '' || $content === '') {
        $msg = '❌ Please fill in all fields.';
    } else {
        if (!empty($_FILES['image']['name'])) {
            $allowed = ['jpg','jpeg','png','gif'];
            $ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
            if (!in_array($ext, $allowed)) {
                $msg = '❌ Invalid image type.';
            } else {
                $imageName = time() . '_' . bin2hex(random_bytes(4)) . '.' . $ext;
                $target = '../uploads/' . $imageName;
                if (!move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                    $msg = '❌ Image upload failed.';
                }
            }
        }
    }

    if ($msg === '') {
        $stmt = mysqli_prepare($conn, "INSERT INTO posts (user_id, title, content, image) VALUES (?, ?, ?, ?)");
        mysqli_stmt_bind_param($stmt, 'isss', $_SESSION['user_id'], $title, $content, $imageName);
        if (mysqli_stmt_execute($stmt)) {
            header('Location: dashboard.php');
            exit;
        } else {
            $msg = '❌ DB error: ' . mysqli_error($conn);
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Add Post</title>
<style>
    body {
        font-family: 'Segoe UI', Arial, sans-serif;
        background: #f3f6fa;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }
    .container {
        background: white;
        padding: 30px 40px;
        border-radius: 12px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.15);
        width: 450px;
    }
    h2 {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
    }
    label {
        display: block;
        font-weight: 600;
        margin-top: 12px;
        color: #444;
    }
    input[type="text"], textarea, input[type="file"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 6px;
        margin-top: 6px;
        font-size: 15px;
    }
    textarea {
        resize: vertical;
    }
    button {
        background: #007bff;
        color: white;
        border: none;
        padding: 10px;
        border-radius: 6px;
        margin-top: 20px;
        width: 100%;
        font-size: 16px;
        cursor: pointer;
        transition: 0.3s;
    }
    button:hover {
        background: #0056b3;
    }
    .msg {
        text-align: center;
        padding: 10px;
        border-radius: 6px;
        margin-bottom: 15px;
    }
    .msg.error {
        background: #ffeaea;
        color: #d9534f;
    }
    .msg.success {
        background: #eaffea;
        color: #28a745;
    }
    .link {
        text-align: center;
        margin-top: 15px;
    }
    .link a {
        text-decoration: none;
        color: #007bff;
        font-weight: bold;
    }
    .link a:hover {
        text-decoration: underline;
    }
</style>
</head>
<body>
<div class="container">
    <h2>📝 Add New Post</h2>
    <?php if ($msg): ?>
        <p class="msg <?php echo (strpos($msg, '❌') !== false) ? 'error' : 'success'; ?>">
            <?php echo $msg; ?>
        </p>
    <?php endif; ?>

    <form method="post" enctype="multipart/form-data">
        <label>Title:</label>
        <input type="text" name="title" required>

        <label>Content:</label>
        <textarea name="content" rows="5" required></textarea>

        <label>Image:</label>
        <input type="file" name="image" accept="image/*">

        <button type="submit">Create Post</button>
    </form>

    <div class="link">
        <a href="dashboard.php">⬅️ Back to Dashboard</a>
    </div>
</div>
</body>
</html>
