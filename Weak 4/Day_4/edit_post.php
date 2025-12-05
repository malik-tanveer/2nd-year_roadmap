<?php
include('db_connect.php');
// echo "<h1><br>Ap ap ko Url chnge krna hai http://localhost/week_4/Day_4/edit_post.php?id= is ma ap na kuch bhi dlna hai number id</h1>";
// Step 1: Validate & get post ID from URL
if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("<p style='color:red; text-align:center;'>❌ Invalid request. No ID provided.</p>");
}

$id = (int) $_GET['id'];

// Step 2: Fetch old data
$sql = "SELECT * FROM read_opera WHERE id = $id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 0) {
    die("<p style='color:red; text-align:center;'>⚠️ No record found with ID: $id</p>");
}

$post = mysqli_fetch_assoc($result);
$message = "";

// Step 3: If form submitted, update record
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'] ?? '';
    $content = $_POST['content'] ?? '';

    if (empty($title) || empty($content)) {
        $message = "<p class='error'>❌ Please fill in all fields!</p>";
    } else {
        $title = htmlspecialchars($title);
        $content = htmlspecialchars($content);

        $update = "UPDATE read_opera SET title='$title', content='$content' WHERE id=$id";

        if (mysqli_query($conn, $update)) {
            $message = "<p class='success'>✅ Post updated successfully!</p>";
            // Fetch updated data again
            $post['title'] = $title;
            $post['content'] = $content;
        } else {
            $message = "<p class='error'>❌ Update failed: " . mysqli_error($conn) . "</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Edit Post</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #f0f4f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: white;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            width: 400px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        label {
            display: block;
            margin-top: 15px;
            color: #444;
            font-weight: 600;
        }
        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 15px;
        }
        input[type="submit"] {
            margin-top: 20px;
            background: #28a745;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 6px;
            font-size: 16px;
            width: 100%;
            cursor: pointer;
            transition: 0.3s;
        }
        input[type="submit"]:hover {
            background: #218838;
        }
        .success {
            color: green;
            background: #e9ffe9;
            padding: 8px;
            border-radius: 6px;
            text-align: center;
        }
        .error {
            color: red;
            background: #ffe9e9;
            padding: 8px;
            border-radius: 6px;
            text-align: center;
        }
        .link {
            display: block;
            margin-top: 15px;
            text-align: center;
        }
        .link a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }
        .link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>✏️ Edit Post</h2>
        <?php if (!empty($message)) echo $message; ?>

        <form method="POST">
            <label>Title:</label>
            <input type="text" name="title" value="<?php echo htmlspecialchars($post['title']); ?>" required>

            <label>Content:</label>
            <textarea name="content" rows="4" required><?php echo htmlspecialchars($post['content']); ?></textarea>

            <input type="submit" value="Update Post">
        </form>

        <div class="link">
            <a href="create.php">⬅️ Back to Add Post</a>
        </div>
    </div>
</body>
</html>
