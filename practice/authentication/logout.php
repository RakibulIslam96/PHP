<?php
session_start();

// session clear
session_unset();   // সব session variable remove
session_destroy(); // session destroy

// redirect to login page
header("Location: login.php");
exit();
?>