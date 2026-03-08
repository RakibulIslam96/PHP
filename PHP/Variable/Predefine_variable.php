<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Predefine Variable</title>
</head>

<body>

<!-- //predefine Variable are design for ready made predefien// -->
   
   <?php
   echo $_SERVER["SERVER_NAME"];
   echo"<br>";

   echo $_SERVER["SERVER_ADDR"];
   echo "<br>";

   echo $_SERVER["SERVER_PORT"];
   echo "<br>";
   
   echo $_SERVER['SERVER_ADMIN'];
   echo '<br>';

   echo $_SERVER['SERVER_PROTOCOL'];
   echo '<br>';

   echo $_SERVER['SCRIPT_FILENAME'];
   echo '<br>';

   echo $_SERVER['HTTP_HOST'];
   echo"<br>";

   echo $_SERVER['HTTP_USER_AGENT'];
   echo'<br>';
   ?>
   
   
   
   
   
   
   <?php
    echo __LINE__;
    echo "<br>";
    ?>

    
    <?php
    echo __FILE__;
    ?>

</body>

</html>