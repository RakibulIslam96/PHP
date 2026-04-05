<?php

class Student {

    private $file = "data.txt";

    public function saveStudent($id,$name,$city){

        $data = $id . "," . $name . "," . $city . "\n";

        file_put_contents($this->file, $data, FILE_APPEND);

        echo "<p style='color:green;'>Data Saved Successfully</p>";
    }

    public function showStudents(){

        if(!file_exists($this->file)){
            return;
        }

        $files = file($this->file);

        foreach($files as $file){

            $parts = explode(",", trim($file));

            if(count($parts) == 3){

                list($id,$name,$city) = $parts;

                echo "ID: ".$id."<br>";
                echo "Name: ".$name."<br>";
                echo "City: ".$city."<br><br>";
            }
        }
    }
}

$student = new Student();

if(isset($_POST['save'])){

    $id = $_POST['id'];
    $name = $_POST['name'];
    $city = $_POST['city'];

    $student->saveStudent($id,$name,$city);
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Student System</title>
</head>

<body>

<div style="
width:320px;
border-radius:10px;
box-shadow:0 0 10px gray;
padding:20px;
margin:auto;
font-family:cursive;
">

<h2>Add Student</h2>

<form method="post">

ID:<br>
<input type="text" name="id"><br><br>

Name:<br>
<input type="text" name="name"><br><br>

City:<br>
<input type="text" name="city"><br><br>

<input type="submit" name="save" value="Save">

</form>

</div>

<br>

<div style="
width:320px;
margin:auto;
font-family:cursive;
">

<h3>Student List</h3>

<?php
$student->showStudents();
?>

</div>

</body>
</html>