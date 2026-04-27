<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $uploadDir = "uploads/";
    $logFile = "upload.txt";

    // Get user input
    $userId = $_POST['user_id'] ?? '';
    $userName = $_POST['user_name'] ?? '';

    // Create folder if not exists
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    if (isset($_FILES['file'])) {

        if ($_FILES['file']['error'] === 0) {

            $fileName = basename($_FILES['file']['name']);
            $tmpName = $_FILES['file']['tmp_name'];
            $targetFile = $uploadDir . $fileName;

            if (move_uploaded_file($tmpName, $targetFile)) {

                // Save to upload.txt
                $data = "ID: $userId | Name: $userName | File: $fileName" . PHP_EOL;
                file_put_contents($logFile, $data, FILE_APPEND);

                echo "✅ Upload successful!";
            } else {
                echo "❌ Failed to move file.";
            }

        } else {
            echo "❌ Upload error code: " . $_FILES['file']['error'];
        }

    } else {
        echo "No file selected.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload with User Info</title>
</head>
<body>

<h2>Upload File</h2>

<form method="POST" enctype="multipart/form-data">
    
    <label>User ID:</label><br>
    <input type="text" name="user_id" required><br><br>

    <label>Name:</label><br>
    <input type="text" name="user_name" required><br><br>

    <label>Select File:</label><br>
    <input type="file" name="file" required><br><br>

    <button type="submit">Upload</button>

</form>

</body>
</html>