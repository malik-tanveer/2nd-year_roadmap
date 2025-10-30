<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'] ?? '';
    $content = $_POST['content'] ?? '';
    include('db_connect.php'); // connection include

    if (empty($title) || empty($content)) {
        $message = "<p class='error'>❌ Please fill in all fields!</p>";
    } else {
        // Prepare query
        $sql = "INSERT INTO read_opera (title, content) VALUES ('$title', '$content')";

        if (mysqli_query($conn, $sql)) {
            $message = "<p class='success'>New record added successfully!</p>";
        } else {
            $message = "<p class='error'>❌ Error: " . mysqli_error($conn) . "</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Day 5 Add New Post & Del & Upload System</title>
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
            background: #007bff;
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
            background: #0056b3;
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
        <h2>📝 Add New Post</h2>
        <?php if (!empty($message)) echo $message; ?>
        
        <form method="POST">
            <label>Title:</label>
            <input type="text" name="title" required>

            <label>Content:</label>
            <textarea name="content" rows="4" required></textarea>

            <input type="submit" value="Add Post">
        </form>

        <div class="link">
            <a href="del.php">➡️ Del Posts</a>
        </div>
    </div>
</body>
</html>
