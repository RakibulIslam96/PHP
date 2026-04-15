<?php
session_start();

if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}

/* ---------------- UPLOAD ---------------- */
if(isset($_POST['upload'])){

    $file = $_FILES['file']['name'];
    $temp = $_FILES['file']['tmp_name'];
    $size = $_FILES['file']['size'];

    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));

    if(($ext == "jpg" || $ext == "png") && $size <= 3*1024*1024){

        // unique file name
        $newName = time() . "_" . rand(1000,9999) . "." . $ext;

        move_uploaded_file($temp,"uploads/".$newName);

        $msg = "File Uploaded Successfully";

    }else{
        $error = "Only JPG/PNG allowed and Max 3MB";
    }
}

/* ---------------- DELETE ---------------- */
if(isset($_GET['delete'])){

    $delFile = "uploads/" . $_GET['delete'];

    if(file_exists($delFile)){
        unlink($delFile);
        $msg = "File Deleted Successfully";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Upload System</title>

<style>

body{
    font-family: Arial;
    background: linear-gradient(135deg,#74b9ff,#a29bfe);
    margin:0;
    padding:0;
}

.container{
    width:80%;
    margin:40px auto;
}

.header{
    background:white;
    padding:20px;
    border-radius:10px;
    text-align:center;
    margin-bottom:20px;
}

.upload-box{
    background:white;
    padding:20px;
    border-radius:10px;
    text-align:center;
    margin-bottom:20px;
}

button{
    padding:10px 15px;
    background:#0984e3;
    color:white;
    border:none;
    border-radius:5px;
    cursor:pointer;
}

.gallery{
    display:grid;
    grid-template-columns:repeat(auto-fit, minmax(180px, 1fr));
    gap:15px;
}

.card{
    background:white;
    padding:10px;
    border-radius:10px;
    text-align:center;
    transition:0.3s;
}

.card:hover{
    transform:scale(1.05);
}

.card img{
    width:100%;
    height:150px;
    object-fit:cover;
    border-radius:8px;
}

.del{
    display:inline-block;
    margin-top:8px;
    color:white;
    background:red;
    padding:5px 10px;
    border-radius:5px;
    text-decoration:none;
}

.msg{color:green;}
.error{color:red;}

</style>

</head>
<body>

<div class="container">

<div class="header">
<h2>Welcome <?php echo $_SESSION['user']; ?></h2>
<a href="logout.php">Logout</a>
</div>

<div class="upload-box">

<h3>Upload Image</h3>

<?php
if(isset($msg)) echo "<p class='msg'>$msg</p>";
if(isset($error)) echo "<p class='error'>$error</p>";
?>

<form method="post" enctype="multipart/form-data">

<input type="file" name="file" required>
<br><br>

<button name="upload">Upload</button>

</form>

</div>

<h2 style="color:white;text-align:center;">📸 Gallery</h2>

<div class="gallery">

<?php

$folder = "uploads/";

if(!is_dir($folder)){
    mkdir($folder);
}

$files = scandir($folder);

foreach($files as $file){

    if($file != "." && $file != ".."){

        echo "<div class='card'>";
        echo "<img src='uploads/$file'>";
        echo "<br>";
        echo "<a class='del' href='?delete=$file'>Delete</a>";
        echo "</div>";

    }
}

?>

</div>

</div>

</body>
</html>