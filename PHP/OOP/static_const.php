<?php
//constant and public static method call korar niyom//

class Course{
    const TSP_NAME="New Horizons <br>";
    public static function courseinfo(){
        echo "IDB provids scholarship";
    }
}
echo course ::TSP_NAME;
course::courseinfo();
?>