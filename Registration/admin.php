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

    if(($ext == "jpg" || $ext == "png" || $ext == "jpeg") && $size <= 3*1024*1024){

        if(!is_dir("uploads/")) mkdir("uploads/");

        // ❌ NO new name, original file name used
        move_uploaded_file($temp,"uploads/".$file);

        $msg = "File Uploaded Successfully";

    } else {
        $error = "Only JPG/PNG allowed and Max 3MB";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Upload System</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container py-4">

<!-- HEADER -->
<div class="card mb-3 text-center shadow-sm">
    <div class="card-body">
        <h4>Welcome <?php echo $_SESSION['user']; ?></h4>
        <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
    </div>
</div>

<!-- UPLOAD BOX -->
<div class="card mb-4 shadow-sm">

    <div class="card-header bg-primary text-white text-center">
        <h5>Upload Image</h5>
    </div>

    <div class="card-body text-center">

        <?php if(isset($msg)) echo "<div class='alert alert-success'>$msg</div>"; ?>
        <?php if(isset($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>

        <form method="post" enctype="multipart/form-data">

            <input type="file" name="file" class="form-control mb-3" required>

            <button name="upload" class="btn btn-primary w-100">
                Upload
            </button>

        </form>

    </div>

</div>

<!-- TABLE -->
<div class="card shadow-sm">

    <div class="card-header bg-dark text-white text-center">
        <h5>Uploaded Files</h5>
    </div>

    <div class="card-body p-0">

        <table class="table table-bordered table-striped text-center mb-0">

            <thead class="table-primary">
                <tr>
                    <th>SL</th>
                    <th>File Name</th>
                    <th>Image</th>
                </tr>
            </thead>

            <tbody>

            <?php
            $folder = "uploads/";
            if(!is_dir($folder)) mkdir($folder);

            $files = array_diff(scandir($folder), array('.', '..'));
            $sl = 1;

            if(count($files) > 0){
                foreach($files as $file){
                    echo "<tr>";
                    echo "<td>$sl</td>";
                    echo "<td>$file</td>";
                    echo "<td><img src='uploads/$file' width='80' class='rounded border'></td>";
                    echo "</tr>";
                    $sl++;
                }
            } else {
                echo "<tr><td colspan='3'>No files found!</td></tr>";
            }
            ?>

            </tbody>

        </table>

    </div>

</div>

</div>

</body>
</html>