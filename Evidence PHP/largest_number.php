<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Out the Largest number</title>
</head>
<body>
    
    <div style="
        width:320px;
        height: 320px;
        border-radius: 10px;
        box-shadow: 0 0 10px gray;
        padding: 40px;
        margin: auto;
        font-family: cursive;
        items-align: center;
        text-align: center;
        ">
        <form method="post">
        <h3> Find out the largest Number </h3>
        Enter First Number :
        <input type="number" name="num1"> <br> <br>

        Enter Second Number :
        <input type="number" name="num2"> <br> <br>

        Enter Third Number :
        <input type="number" name ="num3"> <br> <br>

        <input type="submit" value="Find out the largest number">
</form>
    </div>

    <?php
    if(isset($_POST['num1'])){

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    if($num1 >= $num2 && $num1 >= $num3){
        echo "Largest number is: ".$num1;
    }
    elseif($num2 >= $num1 && $num2 >= $num3){
        echo "Largest number is: ".$num2;
    }
    else{
        echo "Largest number is: ".$num3;
    }
    }
    ?>
</body>
</html>