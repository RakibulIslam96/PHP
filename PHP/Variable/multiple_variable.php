<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple Global Veriable</title>
</head>
<body>
    
    <?php
    
    $a = 12;
    $b = 25;
    $c = 18;

    function add (){
        global $a, $b, $c;
        $x = $a + $b + $c;
        echo $x;
    }
    add();
    ?>
</body>
</html>