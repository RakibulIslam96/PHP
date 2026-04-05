<!DOCTYPE html>
<html>

<body>

    <form method="post">
        Enter first number:
        <input type="number" name="num1"><br><br>

        Enter second number:
        <input type="number" name="num2"><br><br>

        Enter third number:
        <input type="number" name="num3"><br><br>

        <input type="submit" value="Find Largest">
    </form>

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