<?php
include 'db_connect.php';

$id = (int)($_GET['id'] ?? 0);
$stmt = mysqli_prepare($conn, "SELECT p.id, p.title, p.content, p.image, p.created_at, u.username 
                               FROM posts p 
                               JOIN users u ON p.user_id = u.id 
                               WHERE p.id = ?");
mysqli_stmt_bind_param($stmt, 'i', $id);
mysqli_stmt_execute($stmt);
$res = mysqli_stmt_get_result($stmt);
$post = mysqli_fetch_assoc($res);
if (!$post) {
    echo "<p>❌ Post not found</p>";
    exit;
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo htmlspecialchars($post['title']); ?></title>
<style>
    body {
        font-family: 'Segoe UI', Tahoma, sans-serif;
        background: #f8fafc;
        margin: 0;
        padding: 40px 20px;
        display: flex;
        justify-content: center;
    }

    .container {
        background: #fff;
        max-width: 800px;
        width: 100%;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 6px 20px rgba(0,0,0,0.08);
    }

    h1 {
        color: #1e3a8a;
        font-size: 2em;
        margin-bottom: 10px;
    }

    .meta {
        color: #6b7280;
        font-size: 0.9em;
        margin-bottom: 25px;
    }

    img {
        display: block;
        max-width: 100%;
        border-radius: 10px;
        margin: 20px 0;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    .content {
        font-size: 17px;
        line-height: 1.7;
        color: #374151;
        white-space: pre-line;
    }

    a.back {
        display: inline-block;
        margin-top: 25px;
        padding: 10px 18px;
        background: #2563eb;
        color: #fff;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 500;
        transition: background 0.3s;
    }

    a.back:hover {
        background: #1e40af;
    }
</style>
</head>
<body>

<div class="container">
    <h1><?php echo htmlspecialchars($post['title']); ?></h1>
    <div class="meta">
        ✍️ By <strong><?php echo htmlspecialchars($post['username']); ?></strong> 
        | 🕒 <?php echo $post['created_at']; ?>
    </div>

    <?php if ($post['image']): ?>
        <img src="uploads/<?php echo htmlspecialchars($post['image']); ?>" alt="Post Image">
    <?php endif; ?>

    <div class="content"><?php echo nl2br(htmlspecialchars($post['content'])); ?></div>

    <a href="index.php" class="back">⬅ Back to Blog</a>
</div>

</body>
</html>
