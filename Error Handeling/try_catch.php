<?php
$a = 10;
try{
    if ($a<30){
        throw new Exception ("Valid Number");
    } else {
        throw new Exception ("Invaild Number");
    }
} catch (Exception $e){
    echo $e->getMessage() . "<br>";
} finally {
    echo "Execution successful";
}
?>