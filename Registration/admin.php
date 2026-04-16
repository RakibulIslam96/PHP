<?php
session_start();

if(!isset($_SESSION['user'])){
header("location:login.php");
}

if(isset($_POST['upload'])){

$id=$_POST['id'];
$name=$_POST['name'];

$file=$_FILES['file']['name'];
$tmp=$_FILES['file']['tmp_name'];

move_uploaded_file($tmp,"upload/".$file);

$data="$id,$name,$file\n";

file_put_contents("files.txt",$data,FILE_APPEND);

}

?>

<h2>Welcome <?php echo $_SESSION['user']; ?></h2>

<a href="logout.php">Logout</a>

<h3>Upload File</h3>

<form method="post" enctype="multipart/form-data">

<input type="text" name="id" placeholder="ID"><br><br>

<input type="text" name="name" placeholder="Name"><br><br>

<input type="file" name="file"><br><br>

<input type="submit" name="upload" value="Upload">

</form>

<h3>Uploaded Files</h3>

<table border="1">

<tr>
<th>ID</th>
<th>Name</th>
<th>File</th>
<th>Delete</th>
</tr>

<?php

if(file_exists("files.txt")){

$data=file("files.txt");

foreach($data as $line){

$row=explode(",",$line);

echo "<tr>";

echo "<td>".$row[0]."</td>";
echo "<td>".$row[1]."</td>";
echo "<td><a href='upload/".$row[2]."'>View</a></td>";

echo "<td><a href='delete.php?file=".$row[2]."'>Delete</a></td>";

echo "</tr>";

}

}

?>

</table>