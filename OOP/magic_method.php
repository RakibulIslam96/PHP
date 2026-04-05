<?php
class student
{
    public $name="Meem";
    public $age= 44;
    public $degree="BSC";

    public function fullinfo()
    {
        echo $this->name;
        echo $this->age;
        echo $this->degree;
    }
}
$result = new student();
echo $result->name;
echo "<br>";
echo $result->age;
echo "<br>";
echo $result->degree;
echo "<br>";

?>