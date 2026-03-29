<?php

class Employee{
   public $name;
   private $salary;
   protected $bonus;

   public function __construct($n,$s,$b){
    echo"Name: ".$this->name=$n."<br>";
    echo "Salary: " .$this->salary=$s."<br>";
    echo "Bonus: ".$this->bonus=$b."<br>";
   }
   public function getsalary(){
    return $this->salary;
   }
}
class Manager extends Employee {
    public function showBonus() {
        echo "Bonus: " . $this->bonus . "<br>"; 
    }
}
echo "Employee Salary"."<br>";
$emp = new Employee("Rakib", 50000, 5000);
echo "<br>";
$emp = new Employee("Saju",52000, 15400);
echo "<br>";
$emp = new Employee("Raju",2000, 22240);
echo "<br>";

echo "Manager Salary"."<br>";
$m = new Manager("Asad", 60000, 7000);


?>