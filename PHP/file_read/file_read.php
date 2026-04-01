<?php
 $file = fopen("file.txt", "r");
 $content = fread ($file, filesize("file.txt"));
//  echo $content;
 echo "<pre>";
  readfile("file.txt");
  echo "</pre>";
 fclose($file);



?>