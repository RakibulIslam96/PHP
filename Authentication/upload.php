<?php
session_start();

if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}

if(isset($_POST['upload'])){

    $file = $_FILES['file']['name'];
    $temp = $_FILES['file']['tmp_name'];
    $size = $_FILES['file']['size'];

    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));

    if(($ext == "jpg" || $ext == "png") && $size <= 3*1024*1024){

        move_uploaded_file($temp,"uploads/".$file);

        echo "File Uploaded Successfully <br><br>";

    }else{

        echo "Only JPG/PNG file and Max Size 10MB allowed <br><br>";

    }
}
?>

<h2>Welcome <?php echo $_SESSION['user']; ?></h2>

<form method="post" enctype="multipart/form-data">

Select File <br><br>
<input type="file" name="file" required>
<br><br>

<button name="upload">Upload</button>

</form>

<br><br>

<a href="logout.php">Logout</a>

<hr>

<h2>Uploaded File Gallery</h2>

<div style="display:flex; flex-wrap:wrap; gap:15px;">

<?php

$folder = "uploads/";
$files = scandir($folder);

foreach($files as $file){

    if($file != "." && $file != ".."){

        echo "<div style='border:1px solid gray; padding:10px;'>";

        echo "<img src='uploads/$file' width='150'><br>";

        echo $file;

        echo "</div>";

    }

}

?>

</div>