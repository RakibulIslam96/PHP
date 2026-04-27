<?php
$file = "users.txt";

if (isset($_POST['register'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $repass = $_POST['repassword'];

    // EMAIL REGEX
    $emailPattern = "/^[\w\.-]+@[\w\.-]+\.\w{2,}$/";

    if (!preg_match($emailPattern, $email)) {
        echo "Invalid Email!";
    }
    elseif (strlen($pass) < 8) {
        echo "Password must be at least 8 characters!";
    }
    elseif ($pass != $repass) {
        echo "Passwords do not match!";
    }
    else {
        $data = "$name|$email|$pass\n";
        file_put_contents($file, $data, FILE_APPEND);

        // AUTO REDIRECT TO LOGIN
        header("Location: login.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5 col-md-4">

<div class="card shadow">

<div class="card-header bg-primary text-white text-center">
    <h4>Register</h4>
</div>

<div class="card-body">

<form method="post">

<input type="text" name="name" class="form-control mb-2" placeholder="Name" required>

<input type="text" name="email" class="form-control mb-2" placeholder="Email" required>

<input type="password" name="password" class="form-control mb-2" placeholder="Password (min 8 chars)" required>

<input type="password" name="repassword" class="form-control mb-3" placeholder="Retype Password" required>

<button type="submit" name="register" class="btn btn-primary w-100">Register</button>

</form>

</div>

</div>

</div>

</body>
</html>