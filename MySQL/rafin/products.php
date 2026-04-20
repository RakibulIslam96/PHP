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
        $name = $_POST["name"];
        $email = $_POST["email"];
        $contact = $_POST["contact"];
        $menu_id = $_POST["menu_id"];

        $conn->query("call nhr_products('$name','$email','$contact','$menu_id')");
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
        <h3> Manufacturer Information <br>
        Name:
        <input type = "text" name= "name"> <br> <br> 
        Email:
        <input type = "text" name= "email"> <br> <br> 
        Contact:
        <input type = "text" name= "contact"> <br> <br> 
        Manufacture ID:
        <input type = "text" name= "menu_id"> <br> <br> 
        
        <input type = "submit" name = "submit"> 
    </div>
    </form>

    
</body>
</html>