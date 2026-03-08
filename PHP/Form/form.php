<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    
<?php
echo $_REQUEST ['uname'];
?>
<form action="#" method="post">
    User Name: <br>
    <input type="text" name="uname"> <br> <br>
    <input type="submit" value="Submit">
</form>
</body>
</html>