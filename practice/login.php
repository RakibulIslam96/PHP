<?php
session_start();

/* LOGIN */
if(isset($_POST['login'])){

    $name = $_POST['name'];
    $pass = $_POST['password'];

    if($name == "admin" && $pass == "1234"){
        $_SESSION['user'] = $name;
    } else {
        $error = "Invalid login!";
    }
}

/* UPLOAD */
if(isset($_POST['upload'])){

    if(!isset($_SESSION['user'])){
        die("Login first!");
    }

    $file = $_FILES['file']['name'];
    $tmp = $_FILES['file']['tmp_name'];
    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));

    if($ext == "jpg" || $ext == "png" || $ext == "jpeg"){

        if(!is_dir("uploads/")){
            mkdir("uploads/");
        }

        move_uploaded_file($tmp, "uploads/".$file);

        $msg = "Uploaded successfully!";
    } else {
        $error = "Only jpg/png allowed!";
    }
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>System</h2>

<!-- LOGIN -->
<?php if(!isset($_SESSION['user'])): ?>

    <?php if(isset($error)) echo $error; ?>

    <form method="post">
        Name: <input type="text" name="name"><br><br>
        Password: <input type="password" name="password"><br><br>
        <button name="login">Login</button>
    </form>

<?php else: ?>

    <p>Welcome <?php echo $_SESSION['user']; ?></p>

    <a href="logout.php">Logout</a>

    <br><br>

    <?php if(isset($msg)) echo $msg; ?>

    <!-- UPLOAD -->
    <form method="post" enctype="multipart/form-data">
        File: <input type="file" name="file"><br><br>
        <button name="upload">Upload</button>
    </form>

    <hr>

    <h3>Uploaded Images</h3>

    <?php
    $folder = "uploads/";

    if(is_dir($folder)){
        $files = scandir($folder);

        foreach($files as $file){
            if($file != "." && $file != ".."){
                echo "<div>";
                echo "<img src='uploads/$file' width='120'><br>";
                echo $file;
                echo "</div><br>";
            }
        }
    }
    ?>

<?php endif; ?>

</body>
</html>