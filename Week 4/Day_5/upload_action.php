<?php
include('db_connect.php');

// Initialize message variable
$message = "";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $target_dir = "uploads/";

    if (!is_dir($target_dir)) {
        mkdir($target_dir);
    }

    $filename = basename($_FILES["file"]["name"]);
    $target_file = $target_dir . $filename;
    $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $desc = $_POST['description'];

    $allowed = ['jpg', 'jpeg', 'png', 'gif', 'pdf', 'txt'];

    if (!in_array($fileType, $allowed)) {
        $message = "<p class='error'>❌ Invalid file type. Only JPG, PNG, GIF, PDF, or TXT allowed.</p>";
    } else {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            $sql = "INSERT INTO files (filename, description) VALUES ('$filename', '$desc')";
            if (mysqli_query($conn, $sql)) {
                $message = "
                    <p class='success'>✅ File uploaded & info saved successfully!</p>
                    <p><b>File:</b> <a href='uploads/$filename' target='_blank'>$filename</a></p>
                    <p><b>Description:</b> $desc</p>
                    <p>
                        <a href='upload.php' class='btn'>🔁 Upload Another File</a>
                    </p>
                ";
            } else {
                $message = "<p class='error'>❌ Database error: " . mysqli_error($conn) . "</p>";
            }
        } else {
            $message = "<p class='error'>❌ File upload failed.</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>📤 File Upload System (Day 5)</title>
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
        input[type="file"], textarea {
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
            padding: 10px;
            border-radius: 6px;
            text-align: center;
        }
        .error {
            color: red;
            background: #ffe9e9;
            padding: 10px;
            border-radius: 6px;
            text-align: center;
        }
        .btn {
            display: inline-block;
            background: #007bff;
            color: white;
            padding: 8px 14px;
            border-radius: 6px;
            text-decoration: none;
        }
        .btn:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>📤 File Upload System</h2>

        <?php echo $message; ?>

        <form method="POST" enctype="multipart/form-data">
            <label>Select File:</label>
            <input type="file" name="file" required>

            <label>Description:</label>
            <textarea name="description" rows="3" placeholder="Enter description..." required></textarea>

            <input type="submit" value="Upload File">
        </form>
    </div>
</body>
</html>
