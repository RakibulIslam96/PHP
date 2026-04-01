<?php

$write = file_put_contents("store.txt", "Rakib <br> \n", FILE_APPEND);
echo "Successfully" ."<br>";
echo file_get_contents("store.txt"); 

?>