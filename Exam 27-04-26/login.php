<?php
session_start();

$file = "users.txt";

if (isset($_POST['login'])) {

    $name = $_POST['name'];
    $pass = $_POST['password'];

    $users = file($file);
    $login = false;

    foreach ($users as $user) {
        list($u_name, $u_email, $u_pass) = explode("|", trim($user));

        if ($name == $u_name && $pass == $u_pass) {
            $_SESSION['user'] = $name;
            $login = true;
            break;
        }
    }

    if ($login) {
        header("Location: upload.php");
        exit;
    } else {
        echo "Invalid login!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5 col-md-4">

<div class="card shadow">

<div class="card-header bg-success text-white text-center">
    <h4>Login</h4>
</div>

<div class="card-body">

<form method="post">

<input type="text" name="name" class="form-control mb-2" placeholder="Name" required>

<input type="password" name="password" class="form-control mb-3" placeholder="Password" required>

<button type="submit" name="login" class="btn btn-success w-100">Login</button>

</form>

</div>

</div>

</div>

</body>
</html>