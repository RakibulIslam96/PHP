<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "nhr_grup";

$conn =  mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Connection Failed ");
}else{
    echo "Connected Successfully";
}

    if(isset($_POST["submit"])){
        $name = $_POST["brand"];
        $conn->query("call nhr_menu('$name')");
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
    <form method="post">
    <div>
        <h3> Manufacturer Information
        Name:
        <input type = "text" name= "brand"> <br> <br> 
        Id
        <input type = "number" name= "brand"> <br> <br> 
        
        <input type = "submit" name = "submit"> 
    </div>
    </form>
</body>
</html>