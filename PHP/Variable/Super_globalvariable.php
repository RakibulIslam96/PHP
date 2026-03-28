<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method="post">
    Enter Number: <input type="number" name="num">
    <input type="submit" value="check">
    </form>
</body>
</html>
<!--Php code-->
<?php
if (isset($_POST['submit'])){
    $num=$_POST['num'];

    if ($num>0){
        echo "Positive Number";
    }
}



?>