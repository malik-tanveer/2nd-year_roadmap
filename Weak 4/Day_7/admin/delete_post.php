<?php
session_start();
if (!isset($_SESSION['user_id'])) { header('Location: ../login.php'); exit; }
include '../db_connect.php';
$id = (int)($_GET['id'] ?? 0);

// get image name for removal and check ownership
$stmt = mysqli_prepare($conn, "SELECT image, user_id FROM posts WHERE id = ?");
mysqli_stmt_bind_param($stmt, 'i', $id);
mysqli_stmt_execute($stmt);
$res = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($res);
if (!$row || $row['user_id'] != $_SESSION['user_id']) { die('Not allowed'); }

$img = $row['image'];

$del = mysqli_prepare($conn, "DELETE FROM posts WHERE id = ? AND user_id = ?");
mysqli_stmt_bind_param($del, 'ii', $id, $_SESSION['user_id']);
if (mysqli_stmt_execute($del)) {
    if ($img && file_exists('../uploads/' . $img)) unlink('../uploads/' . $img);
    header('Location: dashboard.php');
    exit;
} else {
    echo 'Delete failed: ' . mysqli_error($conn);
}
