<?php
$db = mysqli_connect("localhost", "root", "", "moin_crud");
if($_GET['id']){
    $id = $_GET['id'];

    $query = "SELECT * from users where id = '$id'";
    $result = mysqli_query($id, $query);
    $daras = mysquli_fetch_assoc($result);
    $uid = $datas['id'];
    $n = $datas['name'];
    $c = $datas['contact'];

}

if (isset($_POST['btnupdate'])){
$id =$_POST['id'];
$unam = $_POST['fname'];
$uc = $_POST['contact']
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Simple Form</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <h2 class="text-center mb-4">User Form</h2>

        <form id="userForm" name="userForm" class="p-4 border rounded shadow">

            <!-- Name -->
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter your name">
            </div>

            <!-- Address -->
            <div class="mb-3">
                <label class="form-label">Address</label>
                <textarea class="form-control" name="address" placeholder="Enter your address"></textarea>
            </div>

            <!-- Contact -->
            <div class="mb-3">
                <label class="form-label">Contact</label>
                <input type="text" class="form-control" name="contact" placeholder="Enter your phone number">
            </div>

            <!-- Submit -->
            <button type="submit" class="btn btn-primary w-100" name="btnsubmit">Submit</button>

        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>