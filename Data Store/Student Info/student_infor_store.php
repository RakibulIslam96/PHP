<?php
require_once('student.php');

if (isset($_POST['btnsubmit'])) {

    $uid = $_POST['fid'];
    $uname = $_POST['fname'];
    $uemail = $_POST['femail'];

    $c = new Student($uid, $uname, $uemail);
    $c->store();

    echo "Successfully Stored <br><br>";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Student Info</title>
</head>

<body>
 
    <div style ="
        width:320px;
        border-radius:10px;
        box-shadow:0 0 10px gray;
        padding: 10px 30px ;
        margin:50px auto;
        font-family:cursive;
        ">

        <form action="#" method="post">
        <h1 style = "text-align: center;"> Student Information </h1>
        Id: <br>
        <input type="number" name="fid" required><br><br>

        Name: <br>
        <input type="text" name="fname" required><br><br>

        Email: <br>
        <input type="email" name="femail" required><br><br>

        <input type="submit" name="btnsubmit">

        </form>

        <hr>


<?php
Student::display();
?>

</div>

</body>
</html>