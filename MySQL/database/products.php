<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">

    <h2> Add Manufactor </h2>
    Brand Name:
    <input type = "text" name = "m-name"> <br> <br>
    Menufactorer Company:
    <input type = "text" name = "m-name"> <br> <br>
    <input type = "submit" name = "btn" value ="submit"> <br> <br>
    </form>

    <hr>

     <form method="post">

    <h2> Add Products </h2>
    Product Name:
    <input type = "text" name = "p-name"> <br> <br>
    Product Price:
    <input type = "text" name = "p-price"> <br> <br>
    Menufacturer Name:
    <select name="m_brand_id">
        <option value=""> Select Menufacturer </option>

            <?php
            $result = $db->query("select * from manufacturer")
            ?>


    <input type = "submit" name = "btn" value ="submit"> <br> <br>
    </form>
</body>
</html>