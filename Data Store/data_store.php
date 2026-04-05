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
        padding: 20px;
        margin: auto;
        font-family: cursive;
        items-align: center;
        ">
        <h2>Add Student</h2>

        <form method="post">

        ID: <br>
        <input type="text" name="id"><br><br>

        Name: <br>
        <input type="text" name="name"><br><br>

        City: <br>
        <input type="text" name="city"><br><br>

        <input type="submit" name="save" value="Save">
    </div>

    <?php
        if(isset($_POST['save'])){

        $id = $_POST['id'];
        $name = $_POST['name'];
        $city = $_POST['city'];

        $data = $id . "," . $name . "," . $city . "\n";

        file_put_contents("data.txt", $data, FILE_APPEND);

        echo "Data Saved Successfully";

        }
    $files = file("data.txt");

    foreach($files as $file){

    list($id, $name, $city) = explode(",", $file);

    echo "ID: " . $id . "<br>";
    echo "Name: " . $name . "<br>";
    echo "City: " . $city . "<br><br>";
    }
    ?>
</body>
</html>