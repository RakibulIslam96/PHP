<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Prime Number</title>
</head>

<body style="background:#eef5ff;">

<?php
$result = "";

if(isset($_POST['submit'])){
    $num1 = $_POST['num1'];
    $count = 0;

    if($num1 == 0 || $num1 == 1){
        $result = $num1 . " is a composite number";
    }else{

        for($i=2; $i <= $num1/2; $i++){
            if($num1 % $i == 0){
                $count++;
                break;
            }
        }

        if($count == 1){
            $result = $num1 . " is not a prime number";
        }else{
            $result = $num1 . " is a prime number";
        }
    }
}
?>

<div >

<form method="post">

<h3>Find out the Prime Number</h3>

Enter a Number : <br><br>
<input type="number" name="num1" required
style="padding:6px; border-radius:5px; border:1px solid gray;">

<br><br>

<input type="submit" name="submit" value="Check"
style="
background:#2f80ff;
color:white;
border:none;
padding:8px 20px;
border-radius:6px;
cursor:pointer;
">

</form>

<?php
if($result != ""){
    echo "<p style='margin-top:15px;font-weight:bold;color:#003366;'>$result</p>";
}
?>

</div>

</body>
</html>