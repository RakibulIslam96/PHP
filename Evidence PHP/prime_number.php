<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post">  
    prime Number Check : <input type = "number" name="num"> 
    
  
    <input type="submit">
</form>

<?php 

if(isset($_POST["num"])){

    $num = $_POST["num"];
    $isprime = true;

   if($num <= 1){
    echo $num." is neither a prime nor composite number";
    return; 
    }

    for($i=2; $i <=$num/2; $i++){
        if($num % $i == 0){
            $isprime = false;
            break;
        }
    }

    if($isprime){
        echo $num." is prime";
    }else{
        echo $num. " is not prime";
    }
}

?>
    
</body>
</html>