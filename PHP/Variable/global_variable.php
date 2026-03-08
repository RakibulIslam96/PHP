<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Veriable</title>
</head>
<body>
    
    <?php
    $x = 15;

    function test(){
        global $x;
        echo $x;
    }
    test();
    ?>


</body>
</html>