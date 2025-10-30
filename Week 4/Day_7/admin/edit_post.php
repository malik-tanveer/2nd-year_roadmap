<?php
session_start();
if (!isset($_SESSION['user_id'])) { header('Location: ../login.php'); exit; }
include '../db_connect.php';
$id = (int)($_GET['id'] ?? 0);
$msg = '';

// fetch post and ensure ownership
$stmt = mysqli_prepare($conn, "SELECT id, title, content, image, user_id FROM posts WHERE id = ?");
mysqli_stmt_bind_param($stmt, 'i', $id);
mysqli_stmt_execute($stmt);
$res = mysqli_stmt_get_result($stmt);
$post = mysqli_fetch_assoc($res);
if (!$post || $post['user_id'] != $_SESSION['user_id']) { die('Post not found or access denied'); }

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title'] ?? '');
    $content = trim($_POST['content'] ?? '');
    $imageName = $post['image'];

    if ($title === '' || $content === '') {
        $msg = '⚠️ Please fill all fields.';
    } else {
        if (!empty($_FILES['image']['name'])) {
            $allowed = ['jpg','jpeg','png','gif'];
            $ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
            if (!in_array($ext, $allowed)) {
                $msg = '❌ Invalid image type.';
            } else {
                $newName = time() . '_' . bin2hex(random_bytes(4)) . '.' . $ext;
                $target = '../uploads/' . $newName;
                if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                    if ($imageName && file_exists('../uploads/' . $imageName)) unlink('../uploads/' . $imageName);
                    $imageName = $newName;
                } else {
                    $msg = '⚠️ Image upload failed.';
                }
            }
        }
    }

    if ($msg === '') {
        $upd = mysqli_prepare($conn, "UPDATE posts SET title=?, content=?, image=? WHERE id=? AND user_id=?");
        mysqli_stmt_bind_param($upd, 'sssii', $title, $content, $imageName, $id, $_SESSION['user_id']);
        if (mysqli_stmt_execute($upd)) {
            header('Location: dashboard.php');
            exit;
        } else {
            $msg = '❌ Database error: ' . mysqli_error($conn);
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Edit Post</title>
<style>
    body {
        font-family: 'Segoe UI', Tahoma, sans-serif;
        background: #f3f4f6;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        min-height: 100vh;
    }
    .container {
        background: #fff;
        margin-top: 60px;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        width: 90%;
        max-width: 600px;
    }
    h2 {
        text-align: center;
        color: #222;
        margin-bottom: 20px;
    }
    form {
        display: flex;
        flex-direction: column;
    }
    label {
        margin: 8px 0 4px;
        font-weight: 600;
    }
    input[type="text"], textarea, input[type="file"] {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 15px;
        width: 100%;
        box-sizing: border-box;
    }
    textarea {
        resize: vertical;
    }
    img {
        margin-top: 10px;
        max-width: 100%;
        border-radius: 6px;
    }
    button {
        margin-top: 20px;
        padding: 10px 0;
        background: #2563eb;
        color: white;
        border: none;
        border-radius: 6px;
        font-size: 16px;
        cursor: pointer;
        transition: background 0.3s;
    }
    button:hover {
        background: #1e40af;
    }
    .msg {
        text-align: center;
        margin-bottom: 15px;
        color: #e11d48;
        font-weight: 600;
    }
    .back-link {
        display: inline-block;
        margin-top: 15px;
        text-decoration: none;
        color: #2563eb;
        font-weight: 500;
    }
    .back-link:hover {
        text-decoration: underline;
    }
</style>
</head>
<body>
<div class="container">
    <h2>Edit Post</h2>
    <?php if ($msg): ?>
        <p class="msg"><?= htmlspecialchars($msg) ?></p>
    <?php endif; ?>
    <form method="post" enctype="multipart/form-data">
        <label>Title</label>
        <input name="title" value="<?= htmlspecialchars($post['title']) ?>" required>

        <label>Content</label>
        <textarea name="content" rows="6" required><?= htmlspecialchars($post['content']) ?></textarea>

        <?php if ($post['image']): ?>
            <img src="../uploads/<?= htmlspecialchars($post['image']) ?>" alt="Post Image">
        <?php endif; ?>

        <label>Replace Image</label>
        <input type="file" name="image" accept="image/*">

        <button type="submit">Update Post</button>
    </form>
    <a href="dashboard.php" class="back-link">← Back to Dashboard</a>
</div>
</body>
</html>
