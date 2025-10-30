<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: ../login.php');
    exit;
}
include '../db_connect.php';
$stmt = mysqli_prepare($conn, "SELECT id, title, created_at FROM posts WHERE user_id = ? ORDER BY created_at DESC");
mysqli_stmt_bind_param($stmt, 'i', $_SESSION['user_id']);
mysqli_stmt_execute($stmt);
$res = mysqli_stmt_get_result($stmt);
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Admin Dashboard</title>
<style>
    body {
        font-family: 'Segoe UI', Arial, sans-serif;
        background: #f3f6fa;
        margin: 0;
        padding: 0;
    }
    .container {
        width: 90%;
        max-width: 900px;
        margin: 50px auto;
        background: white;
        padding: 30px 40px;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    h1 {
        text-align: center;
        color: #333;
        margin-bottom: 10px;
    }
    .top-links {
        text-align: center;
        margin-bottom: 20px;
    }
    .top-links a {
        display: inline-block;
        margin: 0 10px;
        color: #007bff;
        text-decoration: none;
        font-weight: 600;
    }
    .top-links a:hover {
        text-decoration: underline;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 15px;
    }
    th, td {
        padding: 12px 15px;
        text-align: left;
    }
    th {
        background: #007bff;
        color: white;
        text-transform: uppercase;
        font-size: 14px;
    }
    tr:nth-child(even) {
        background: #f8f9fa;
    }
    tr:hover {
        background: #eef4ff;
    }
    td {
        border-bottom: 1px solid #ddd;
        color: #333;
    }
    .actions a {
        padding: 6px 10px;
        border-radius: 6px;
        text-decoration: none;
        color: white;
        font-size: 14px;
    }
    .actions a.edit {
        background: #28a745;
    }
    .actions a.delete {
        background: #dc3545;
    }
    .actions a.edit:hover {
        background: #218838;
    }
    .actions a.delete:hover {
        background: #c82333;
    }
    .empty {
        text-align: center;
        color: #888;
        padding: 20px;
    }
</style>
</head>
<body>
<div class="container">
    <h1>👨‍💼 Admin Dashboard</h1>
    <p style="text-align:center; color:#666;">Welcome, <b><?php echo htmlspecialchars($_SESSION['username']); ?></b></p>

    <div class="top-links">
        <a href="../index.php">🏠 View Public Site</a>
        <a href="create_post.php">➕ Add New Post</a>
        <a href="../logout.php">🚪 Logout</a>
    </div>

    <table>
        <thead>
            <tr><th>ID</th><th>Title</th><th>Created</th><th>Actions</th></tr>
        </thead>
        <tbody>
        <?php if (mysqli_num_rows($res) > 0): ?>
            <?php while($row = mysqli_fetch_assoc($res)): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo htmlspecialchars($row['title']); ?></td>
                    <td><?php echo $row['created_at']; ?></td>
                    <td class="actions">
                        <a href="edit_post.php?id=<?php echo $row['id']; ?>" class="edit">✏️ Edit</a>
                        <a href="delete_post.php?id=<?php echo $row['id']; ?>" class="delete" onclick="return confirm('Are you sure you want to delete this post?')">🗑️ Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr><td colspan="4" class="empty">No posts found. Click “Add New Post” to create one!</td></tr>
        <?php endif; ?>
        </tbody>
    </table>
</div>
</body>
</html>
