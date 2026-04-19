<?php
include ('connection.php');

if(isset($_POST['btn'])){
    $a = $_POST['name'];
    $b = $_POST['address'];
    $c = $_POST['email'];
    $d = $_POST['contact'];
    $conn->query ("CALL new_users('$a','$b', '$c', 'd')");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Product Form</title>
    <style>
        body {
            font-family: Arial;
            text-align: center;
        }
        form {
            background: #e6f2ff;
            padding: 20px;
            width: 300px;
            margin: auto;
            border-radius: 10px;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
        }
        button {
            padding: 10px;
            background: blue;
            color: white;
            border: none;
            margin-top: 10px;
        }
        table {
            margin: 20px auto;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 10px;
        }
    </style>
</head>
<body>

<h2>User Information Form</h2>

<form method="POST">
    Name:<br>
    <input type="text" name="name" required><br><br>

    Address:<br>
    <textarea name="address" required></textarea><br><br>

    Email:<br>
    <input type="email" name="email" required><br><br>

    Contact:<br>
    <input type="text" name="contact" required><br><br>

    <button type="submit" name="btn">Submit</button>
</form>
</body>
</html>