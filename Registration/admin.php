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
        $newName = time() . "_" . rand(1000,9999) . "." . $ext;
        if(!is_dir("uploads/")) mkdir("uploads/");
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
    body{ font-family: Arial; background: linear-gradient(135deg,#74b9ff,#a29bfe); margin:0; padding:0; }
    .container{ width:80%; margin:40px auto; }
    .header, .upload-box{ background:white; padding:20px; border-radius:10px; text-align:center; margin-bottom:20px; }
    button{ padding:10px 15px; background:#0984e3; color:white; border:none; border-radius:5px; cursor:pointer; }
    
    table { width: 100%; background: white; border-collapse: collapse; border-radius: 10px; overflow: hidden; margin-top: 20px; }
    th, td { padding: 12px; text-align: center; border-bottom: 1px solid #ddd; }
    th { background-color: #0984e3; color: white; }
    
    .img-preview { width: 80px; height: 60px; object-fit: cover; border-radius: 5px; cursor: pointer; transition: 0.3s; }
    .img-preview:hover { opacity: 0.7; }
    .del{ color:white; background:red; padding:5px 10px; border-radius:5px; text-decoration:none; font-size: 14px; }
    .msg{color:green;} .error{color:red;}

    /* Fullscreen Modal Styling */
    #myModal {
        display: none; position: fixed; z-index: 999; padding-top: 50px;
        left: 0; top: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.9);
    }
    .modal-content {
        margin: auto; display: block; width: 80%; max-width: 700px; border-radius: 10px;
    }
    .close {
        position: absolute; top: 15px; right: 35px; color: #f1f1f1;
        font-size: 40px; font-weight: bold; cursor: pointer;
    }
</style>
</head>
<body>

<div class="container">
    <div class="header">
        <h2>Welcome <?php echo $_SESSION['user']; ?></h2>
        <a href="logout.php">Logout</a>
    </div>
    
      
    <div class="upload-box">
          <div> 
            <form method="post">
     ID:
    <input type="number" name="num"> <br> <br>
        Name:
    <input type="text" name="name"> <br>
            </form>
        </div>
    
        <h3>Upload Image</h3>
        <?php if(isset($msg)) echo "<p class='msg'>$msg</p>"; ?>
        <?php if(isset($error)) echo "<p class='error'>$error</p>"; ?>
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="file" required>
            <br><br>
            <button name="upload">Upload</button>
        </form>
    </div>

    <h2 style="color:white;text-align:center;">📸 Uploaded Files List</h2>

    <table>
        <thead>
            <tr>
                <th>SL No</th>
                <th>File Name</th>
                <th>Preview (Click to view)</th>
                <th>Action</th>
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
                    echo "<td>" . $sl++ . "</td>";
                    echo "<td>" . $file . "</td>";
                    // এখানে onclick ইভেন্ট যোগ করা হয়েছে
                    echo "<td><img src='uploads/$file' class='img-preview' onclick='openModal(this.src)'></td>";
                    echo "<td><a class='del' href='?delete=$file' onclick=\"return confirm('Are you sure?')\">Delete</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No files found!</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<!-- Fullscreen View Modal -->
<div id="myModal">
    <span class="close" onclick="closeModal()">&times;</span>
    <img class="modal-content" id="imgFull">
</div>

<script>
    function openModal(src) {
        document.getElementById("myModal").style.display = "block";
        document.getElementById("imgFull").src = src;
    }

    function closeModal() {
        document.getElementById("myModal").style.display = "none";
    }

    // উইন্ডোর বাইরে ক্লিক করলে যেন বন্ধ হয়
    window.onclick = function(event) {
        let modal = document.getElementById("myModal");
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

</body>
</html>
