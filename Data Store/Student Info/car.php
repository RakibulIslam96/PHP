<?php
//Step 1:
class Car
{
    public $id;
    private $name;
    public static $file_source = "store.txt";

    public function __construct($_id, $_name)
    {
        $this->id = $_id;
        $this->name = $_name;
    }

    public function child()
    {
        return $this->id . "," . $this->name . PHP_EOL;
    }

    public function store()
    {
        file_put_contents(self::$file_source, $this->child(), FILE_APPEND);
    }

   public static function display()
{   
    $data = file(self::$file_source);

    foreach ($data as $line) {

        $arr = explode(",", trim($line));

        if(isset($arr[0]) && isset($arr[1])){

            echo "ID: " . $arr[0] . "<br>";
            echo "Name: " . $arr[1] . "<br><br>";

        }
    }
}
}
?>