<?php
$conn = mysqli_connect("localhost", "root", "", "customer");

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];


    $conn->query("CALL products_details('$name', '$address', '$email', '$contact')");
    // if (mysqli_query($conn, $sql)) {
    //     $message = "<p style='color:green;'>Data inserted via Procedure!</p>";
    // } else {
    //     $message = "<p style='color:red;'>Error: " . mysqli_error($conn) . "</p>";
    // }

    mysqli_next_result($conn); // important
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

<?php echo $message; ?>

<form method="POST">
    Name:<br>
    <input type="text" name="name" required><br><br>

    Address:<br>
    <textarea name="address" required></textarea><br><br>

    Email:<br>
    <input type="email" name="email" required><br><br>

    Contact:<br>
    <input type="text" name="contact" required><br><br>

    <button type="submit">Submit</button>
</form>

<hr>

<h3>Stored Data</h3>

<table>
<tr>
    <th>Name</th>
    <th>Address</th>
    <th>Email</th>
    <th>Contact</th>
</tr>

<?php
$result = mysqli_query($conn, "SELECT * FROM products");

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
        <td>{$row['name']}</td>
        <td>{$row['address']}</td>
        <td>{$row['email']}</td>
        <td>{$row['contact']}</td>
    </tr>";
}
?>

</table>

</body>
</html>