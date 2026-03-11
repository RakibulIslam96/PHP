<form method="post">
Enter Your Date of Birth:
<input type="date" name="dob">
<input type="submit" value="Submit">
</form>

<?php

if(isset($_POST['dob'])){

    $dob = $_POST['dob'];

    // Age calculation
    $birthDate = new DateTime($dob);
    $today = new DateTime("today");
    $age = $birthDate->diff($today)->y;

    // Day name
    $day = date("l", strtotime($dob));

    // Month name
    $month = date("F", strtotime($dob));

    echo "Your Date of Birth: ".$dob;
    echo "<br>";
    echo "Your Age: ".$age;
    echo "<br>";
    echo "Birth Day: ".$day;
    echo "<br>";
    echo "Birth Month: ".$month;
}

?>

<?php
echo"<br>";
$birthDate = date_create("17-04-2000");
$today = date_create(date("d-m-Y"));
$diff = date_diff($birthDate, $today);

echo $diff-> format("Total: %a"." Days");
echo "<br>";
echo $diff-> format(" %y year, %m month, %d days");
?>