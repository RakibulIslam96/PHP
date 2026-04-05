<form method="post">  
    First Number: <input type = "number" name="num1"> &nbsp; &nbsp;
    Second Number: <input type = "number" name="num2">&nbsp; &nbsp;
    Third Number: <input type = "number" name="num3">&nbsp; &nbsp;
    <input type="submit" name="submit">
</form>
<?php
if (isset($_POST['submit'])){
    $a = $_POST['num1'];
    $b = $_POST['num2'];
    $c = $_POST['num3'];

    if($a>=$b && $a>=$c){
        echo "Largest Number:".$a;
    } elseif($b>=$a && $b>=$c){
        echo "Largest Number:".$b;
    } else{
        echo "Largest Number:".$c;
    }
}

?>