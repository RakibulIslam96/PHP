<!DOCTYPE html>
<html>
<head>
    <title>Image Upload</title>
</head>
<body>

<?php
$target_file = "";
if (isset($_POST['btnsubmit'])) {
    $fileName = $_FILES['i']['name'];
    $tmp = $_FILES['i']['tmp_name'];
    $fileSize = $_FILES['i']['size']; // Byte-e size nibe
    $typ = pathinfo($fileName, PATHINFO_EXTENSION);
    $path = "image/";

    // 400 KB check (400 * 1024 = 409600 bytes)
    if ($fileSize <= 409600) {
        if ($typ == "jpg" || $typ == "png") {
            $target_file = $path . $fileName;
            move_uploaded_file($tmp, $target_file);
        } else {
            echo "Shudhu JPG ba PNG allow!";
        }
    } else {
        echo "File size 400 KB er beshi!";
    }
}
?>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="i">
        <input type="submit" name="btnsubmit">
    </form>

    <?php
    if (!empty($target_file)) {
        echo "<img src='$target_file' width='400px'>";
    }
    ?>

</body>
</html>
