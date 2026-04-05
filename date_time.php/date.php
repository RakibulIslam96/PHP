<?php
//time zone set kore Hours nite hobe
date_default_timezone_set("Asia/Dhaka");

//second from 1970//
echo time();
echo "<br>";
 
//এটা day (date) দেখায় 2 digit format এ।
echo date ('d');
echo "<br>";

//এটা day (date) দেখায় single digit বা normal number এ।
echo date("j");
echo "<br>";

//seven days name
echo date('D');
echo "<br>";

//seven days name
echo date("l");
echo "<br>";

//month with just 1 numberic value
echo date("n");
echo "<br>";

// month with 2 numeric value
echo date("m"); //month
echo "<br>";

//month 1st three letters
echo date("M"); //month
echo "<br>";

//full form of month
echo date("F");
echo "<br>";

// short form of year with last 2 digit //
echo date("y");
echo "<br>";

//full year
echo date("Y");
echo "<br>";

//full format of date/month/year
echo date('d-m-y');
echo "<br>";

//full format of date/month/year(full)
echo date('d/m/Y');
echo "<br>";

//leap year check
echo date("L");
echo "<br>";

//
echo date("g");
echo date("G");
echo "<br>";

//Minutes of present day
echo date("i"); //Minutes
echo "<br>";

//seconds of present time
echo date("s"); //seconds
echo "<br>";


//time format (0-12 hours)
echo date("h");
echo "<br>";

//time format (1-24 hours)
echo date("H");
echo "<br>";

//am/pm ber korar code
echo date('a');
echo '<br>';

//A.M 
echo date('A');
echo '<br>';

//hours/minutes/seconds/am/pm
echo date("h:i:s a");
echo "<br>";

//day name, date, month, full year
echo date("l, d F Y");
echo "<br>";