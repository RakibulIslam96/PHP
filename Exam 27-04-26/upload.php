<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

// session array if not set
if (!isset($_SESSION['uploads'])) {
    $_SESSION['uploads'] = [];
}

if (isset($_POST['upload'])) {

    $id = $_POST['id'];
    $name = $_POST['name'];

    $file = $_FILES['file'];

    $fileName = $file['name'];
    $tmp = $file['tmp_name'];
    $size = $file['size'];

    $ext = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    $allowed = ['jpg', 'jpeg', 'png'];

    if (in_array($ext, $allowed) && $size <= 2000000) {

        $newName = uniqid() . "." . $ext;
        $path = "uploads/" . $newName;

        move_uploaded_file($tmp, $path);

        // save to session array
        $_SESSION['uploads'][] = [
            "id" => $id,
            "name" => $name,
            "image" => $path
        ];
    } else {
        echo "Invalid file!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5 col-md-6">

<div class="card shadow">

<div class="card-header bg-dark text-white text-center">
    <h4>Upload Image</h4>
</div>

<div class="card-body">

<!-- FORM -->
<form method="post" enctype="multipart/form-data">

<input type="text" name="id" class="form-control mb-2" placeholder="ID" required>

<input type="text" name="name" class="form-control mb-2" placeholder="Name" required>

<input type="file" name="file" class="form-control mb-3" required>

<button type="submit" name="upload" class="btn btn-primary w-100">Upload</button>

</form>

<hr>

<!-- TABLE -->
<table class="table table-bordered table-striped text-center">

    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Image</th>
        </tr>
    </thead>

    <tbody>

    <?php foreach ($_SESSION['uploads'] as $data): ?>

        <tr>
            <td><?php echo $data['id']; ?></td>
            <td><?php echo $data['name']; ?></td>
            <td>
                <img src="<?php echo $data['image']; ?>" width="80" height="80" class="rounded">
            </td>
        </tr>

    <?php endforeach; ?>

    </tbody>

</table>

</div>

</div>

</div>

</body>
</html>