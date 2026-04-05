<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <h3> Find out the Prime Number </h3>
        Enter a Number :
        <input type="number" name="num1"> <br> <br>
        <input type="submit" name="submit">
        </form>
    </div>
    <?php
    if (isset ($_POST['submit'])){
        $num1 =$_POST['num1'];
        $count = 0;
        if($num1==0 || $num1==1){
            echo $num1."is a composite number";
        }else {
            for ($i=2; $i <=$num1/2; $i++){
                if($num1 % $i ==0){
                    $count++;
                    break;
                }
            }
            if($count==1){
                echo $num1." is not a prime number";
            }else{
                echo $num1." is a prime number";
            }
        }
    }

    
    ?>
</body>
</html>