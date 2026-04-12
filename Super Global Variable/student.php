<!DOCTYPE html>
<html>
<head>
    <title>Student Result</title>
</head>
<body>

<h2>Student Result System</h2>

<h3>Add Student</h3>
<form method="post">
    ID: <input type="number" name="id" required><br><br>
    Name: <input type="text" name="name" required><br><br>
    Batch: <input type="text" name="batch" required><br><br>

    <input type="submit" name="save" value="Save">
</form>

<hr>

<h3>Search Student</h3>
<form method="post">
    Enter ID:
    <input type="number" name="search_id" required>
    <input type="submit" name="search" value="Search">
</form>

<?php

class Student {
    public $id;
    public $name;
    public $batch;

    function __construct($id, $name, $batch) {
        $this->id = $id;
        $this->name = $name;
        $this->batch = $batch;
    }


    function save() {
        $file = fopen("data.txt", "a");
        fwrite($file, $this->id . "," . $this->name . "," . $this->batch . PHP_EOL);
        fclose($file);

        echo "<p style='color:green;'>Student Saved Successfully</p>";
    }

    function result($searchId) {

        if (!file_exists("data.txt")) {
            echo "<p style='color:red;'>No Data Found</p>";
            return;
        }

        $file = file("data.txt");

        foreach ($file as $line) {

            $data = explode(",", trim($line));

            if ($data[0] == $searchId) {

                echo "<h3>Result Found</h3>";
                echo "ID: " . $data[0] . "<br>";
                echo "Name: " . $data[1] . "<br>";
                echo "Batch: " . $data[2] . "<br>";
                return;
            }
        }

        echo "<p style='color:red;'>Student Not Found</p>";
    }
}

if (isset($_POST['save'])) {

    $obj = new Student($_POST['id'], $_POST['name'], $_POST['batch']);
    $obj->save();
}

if (isset($_POST['search'])) {

    $obj = new Student("", "", "");
    $obj->result($_POST['search_id']);
}

?>

</body>
</html>