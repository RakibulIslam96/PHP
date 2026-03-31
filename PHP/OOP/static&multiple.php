<?php

class Trainee_Data{
    public static $name="Hello! Trainers <br>";
    public static $deg="Graphic Designer <br>";
    public static $salary="50000 <br>";
    public static $join="20-jan-2000 <br>";

    public static function requiredinfo(){
        echo self ::$name;
        echo self ::$deg;
        echo self ::$salary;
        echo self ::$join;
    }
}
Trainee_Data ::requiredinfo();
?>