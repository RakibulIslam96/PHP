<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

    <?php
    $target_file = "";
    if (isset($_POST['btnsubmit'])){
        $fileName = $_FILES['i'] ['name'];
        $tmp = $_FILES['i']['tmp_name'];
        $typ = pathinfo($fileName, PATHINFO_EXTENSION);
        $path = "image/";
        if ($typ =="jpg" || $typ=="png") {
            $target_file = $path . $fileName;
         move_uploaded_file($tmp, "image/".$fileName);
        }
    }
    ?>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="i">
        <input type="submit" name= "btnsubmit">
    
    </form>
    <?php
    if(!empty($target_file)){
        echo "<img src='$target_file' width='400px'>";
    }
    ?>
</body>
</html>