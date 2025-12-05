<?php
include 'db_connect.php';

$search = trim($_GET['q'] ?? '');
if ($search !== '') {
    $like = "%$search%";
    $stmt = mysqli_prepare($conn, "SELECT id, title, content, image, created_at FROM posts WHERE title LIKE ? OR content LIKE ? ORDER BY created_at DESC");
    mysqli_stmt_bind_param($stmt, 'ss', $like, $like);
} else {
    $stmt = mysqli_prepare($conn, "SELECT id, title, content, image, created_at FROM posts ORDER BY created_at DESC");
}
mysqli_stmt_execute($stmt);
$res = mysqli_stmt_get_result($stmt);
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Blog - Home</title>
<link rel="stylesheet" href="index.css">
</head>
<body>

<header>
    <h1>📝 Public Blog</h1>
</header>

<div class="search-bar">
    <form method="get" style="display: flex; width: 100%;">
        <input type="text" name="q" value="<?= htmlspecialchars($search) ?>" placeholder="Search posts...">
        <button type="submit">Search</button>
    </form>
</div>

<div class="container">
    <p style="text-align:right;">
        <a href="login.php" class="login-link">🔑 Admin Login</a>
    </p>

    <?php while($row = mysqli_fetch_assoc($res)): ?>
        <article class="post">
            <h2><a href="view_post.php?id=<?= $row['id'] ?>"><?= htmlspecialchars($row['title']) ?></a></h2>
            <?php if ($row['image']): ?>
                <img src="uploads/<?= htmlspecialchars($row['image']) ?>" alt="Post Image">
            <?php endif; ?>
            <p><?= nl2br(htmlspecialchars(substr($row['content'], 0, 300))) ?>...</p>
            <small>📅 <?= $row['created_at'] ?></small>
        </article>
    <?php endwhile; ?>
</div>

<footer>
    © <?= date('Y') ?> My Blog. All rights reserved.
</footer>

</body>
</html>
