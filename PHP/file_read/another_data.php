<?php

$r = fopen ("store1.txt", "w");
fwrite ($r, "this is a new file");
fclose($r);
?>