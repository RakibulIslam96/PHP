<?php

class person{
    public $name;
    public $age;
    public $address;

    public function __construct ($n, $a, $adr ){
    $this->name=$n;
    $this->age=$a;
    $this->address=$adr;
}
public function showBasicDetails(){

    echo "Name: ".$this->name. "<br>";
    echo "Age: ".$this->age. "<br>";
    echo "Address: ".$this->address. "<br>";
}
}

//inheriting student information//
class Student extends person{
    public $id;
    public $subject;

    public function __construct($n, $a, $adr, $id, $sub){
        parent::__construct($n, $a, $adr);
        $this-> id=$id;
        $this-> subject=$sub;
    }
    public function showStudentInfo(){
        echo " Studnt Information <br>";
        $this-> showBasicDetails();
        echo "ID:" .$this->id ."<br>";
        echo "Subject:" .$this->subject."<br>"."<br>";
    }
}

//teacher information inherit//

class Teacher extends person{
    public $designation;
    public $salary;

    public function __construct($n, $a, $adr, $deg, $sal){
    parent:: __construct($n, $a, $adr);
     $this-> Designation=$deg;
    $this-> salary=$sal;
    $this->showBasicDetails();
    echo "Designation: ".$this->Designation . "<br>";
    echo "Salary: ".$this->salary . "<br>";
    
    }   
}

$st=new student('Rakib', 25, "Mirpur,Dhaka-1216", 1295395, "Web Development");
$st->showStudentInfo();
$tr=new Teacher("Asadul Islam", 40, "Mohammadpur-1214", "Assistant Teacher", 4200000);

?>