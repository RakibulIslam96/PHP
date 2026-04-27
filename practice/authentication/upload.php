<?php
session_start();

if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}

/* ---------------- UPLOAD ---------------- */
if(isset($_POST['upload'])){

    $name = $_POST['name'];

    $file = $_FILES['file']['name'];
    $tmp = $_FILES['file']['tmp_name'];
    $size = $_FILES['file']['size'];
    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));

    $allowed = ["jpg","jpeg","png"];

    if(in_array($ext,$allowed) && $size <= 2*1024*1024){

        if(!is_dir("uploads/")){
            mkdir("uploads/");
        }

        $newFile = time()."_".$file;

        move_uploaded_file($tmp, "uploads/".$newFile);

        /* ✅ save name + file together */
        $data = $name."|".$newFile."\n";
        file_put_contents("data.txt", $data, FILE_APPEND);

        $msg = "Uploaded successfully!";
    }
    else{
        $msg = "Invalid file!";
    }
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Welcome <?php echo $_SESSION['user']; ?></h2>

<a href="logout.php">Logout</a>

<hr>

<?php if(isset($msg)) echo $msg; ?>

<h3>Upload</h3>

<form method="post" enctype="multipart/form-data">

Name: <input type="text" name="name" required><br><br>

File: <input type="file" name="file" required><br><br>

<button name="upload">Upload</button>

</form>

<hr>

<h3>Uploaded Data</h3>

<?php
$file = "data.txt";

if(file_exists($file)){

    $lines = file($file);

    foreach($lines as $line){

        list($name,$img) = explode("|", trim($line));

        echo "<div>";
        echo "Name: ".$name."<br>";
        echo "<img src='uploads/".$img."' width='120'><br><br>";
        echo "</div>";
    }
}
?>

</body>
</html>