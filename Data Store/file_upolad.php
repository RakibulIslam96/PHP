<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // $_FILES['photo'] এর ভেতর সব তথ্য অ্যারে আকারে থাকে
    echo "<pre>";
    print_r($_FILES['photo']);
    echo "</pre>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
    <input type="file" name="photo">
    <input type="submit" value="Upload">
</form>
</body>
</html>
