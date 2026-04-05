<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Global Variable</title>
</head>
<body>
    
     <h3>
        Super Global Variable
        $_REQUEST, $_GET, $_POST
     </h3>

     <?php
     echo $_REQUEST['n'];
     ?>

     <div>
        <form action="#" method="post">
            name:
            <input type="text" name="n">
            <input type="submit" value="Submit">
        </form>
     </div>


     <h3>
        Super Global Variable
        $_GET
     </h3>

     <?php
     echo $_POST['n'];
     ?>

     <div>
        <form action="#" method="post">
            name:
            <input type="text" name="n">
            <input type="submit" value="Submit">
        </form>
     </div>

     
     <?php
     echo $_GET['n'];
     ?>

     <div>
        <form action="#" method="get">
            name:
            <input type="text" name="n">
            <input type="submit" value="Submit">
        </form>
     </div>
</body>
</html>