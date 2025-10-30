<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>📤 Upload File</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .upload-box {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
            width: 380px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        input[type="file"], textarea {
            width: 100%;
            margin-top: 10px;
        }
        textarea {
            height: 80px;
            resize: none;
        }
        input[type="submit"] {
            margin-top: 15px;
            background: #007bff;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 6px;
            width: 100%;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background: #0056b3;
        }
        a {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="upload-box">
        <h2>Upload New File</h2>

        <!-- ⚠️ Important: enctype="multipart/form-data" -->
        <form action="upload_action.php" method="POST" enctype="multipart/form-data">
            <label>Select File:</label>
            <input type="file" name="file" required>

            <label>Description:</label>
            <textarea name="description" placeholder="Write short description..." required></textarea>

            <input type="submit" value="Upload File">
        </form>

        <a href="create.php">⬅️ Back to Posts</a>
    </div>
</body>
</html>
