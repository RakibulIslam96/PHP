<?php

class user {
    public static $name = "Hello Php!". "<br>";
    const Name = "Hello Constant Value". "<br>";
    public static function info(){
        echo "This is a static method <br>";
        echo self::$name;
    }
}
echo user::info();
echo user::Name;
?>