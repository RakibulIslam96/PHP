<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload with Size Limit</title>
</head>
<body>

    <?php
    $target_file = "";
    $error_msg = "";

    if (isset($_POST['btnsubmit'])) {
        $fileName = $_FILES['i']['name'];
        $tmp = $_FILES['i']['tmp_name'];
        $fileSize = $_FILES['i']['size']; 
        $typ = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $path = "image/";

        $maxSize = 400 * 1024;


        if ($typ == "jpg" || $typ == "png" || $typ == "jpeg") {
            
            if ($fileSize <= $maxSize) {
            
                if (!is_dir($path)) {
                    mkdir($path, 0777, true);
                }

                $target_file = $path . $fileName;
                if (move_uploaded_file($tmp, $target_file)) {
                    // Success!
                } else {
                    $error_msg = "File upload korte somossa hoyeche.";
                }
            } else {
                $error_msg = "Error: Image size 400 KB er beshi hobe na! (Apnar file: " . round($fileSize / 1024, 2) . " KB)";
            }
        } else {
            $error_msg = "Error: Shudhu JPG ba PNG allow kora hobe.";
        }
    }
    ?>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="i" required>
        <input type="submit" name="btnsubmit" value="Upload Image">
    </form>

    <br>

    <?php
    if (!empty($error_msg)) {
        echo "<p style='color:red;'>$error_msg</p>";
    }

    if (!empty($target_file) && empty($error_msg)) {
        echo "<h3>Uploaded Image:</h3>";
        echo "<img src='$target_file' width='400px' style='border:1px solid #ccc;'>";
    }
    ?>

</body>
</html>
