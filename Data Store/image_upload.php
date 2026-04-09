<?php
if(isset($_POST['submitbtn'])){
    $fileName = $_FILES['f']['name'];
    $tmp = $_FILES['f']['tmp_name'];
    $typ = pathinfo($fileName, PATHINFO_EXTENSION);
    $s = "img/";

    if($typ == "jpg" || $typ == "png"){
        move_uploaded_file($tmp, $s . $fileName);
    } else {
        echo "only jpg, png uploaded";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload</title>
</head>
<body>

<form action="" method="post" enctype="multipart/form-data"> 
    <input type="file" name="f">
    <input type="submit" name="submitbtn">
</form>

<?php
if(isset($_POST['submitbtn'])){
    echo "<img src='img/$fileName' width='200'>";
    echo "<br>";
    echo "File uploded & Stored successfully";
}
?>

</body>
</html>