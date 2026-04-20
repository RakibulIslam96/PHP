<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "faim";

$conn =  mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Connection Failed ");
} else {
    echo "Connected Successfully";
}

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];

    $query = "INSERT INTO brand (name, email, contact) 
              VALUES ('$name', '$email', '$contact')";

    if(mysqli_query($conn, $query)){
        echo "Data Inserted Successfully";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
</head>
<body>

<h2>User Form</h2>

<form method="post">
    
    Name: <br>
    <input type="text" name="name" required><br><br>
    
    Email: <br>
    <input type="email" name="email" required><br><br>
    
    Contact: <br>
    <input type="text" name="contact" required><br><br>
    
    <input type="submit" name="submit" value="Submit">

</form>

</body>
</html>