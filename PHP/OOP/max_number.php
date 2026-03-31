<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maximum Number</title>
</head>
<body>
    
    <form method="post"> 
    Enter First Number: 
    <input type="number" name="num1"> <br> <br>

     Enter Second Number: 
    <input type="number" name="num2"> <br> <br>

     Enter Third Number: 
    <input type="number" name="num3"> <br> <br>

    <input type="submit" value="Find Largest Number">

    </form>

    <?php
    
    if (isset($_POST["num1"])){
    $num1=$_POST["num1"];
    $num2=$_POST["num2"];
    $num3=$_POST["num3"];
    if($num1>=$num2 && $num1>=$num3){
        echo"The maximum number is: ".$num1;
    }
    else if ($num2>=$num1 && $num2>=$num3){
        echo"The maximum number is: " .$num2;
    }
    else{
    echo"The maximum number is: " . $num3;
    }
    }

    
    ?>
</body>
</html>