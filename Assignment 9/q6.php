<?php
date_default_timezone_set("Asia/Kolkata");
echo "Current Date & Time: " . date("d-m-Y H:i:s") . "<br>";
$dob = "2006-03-01";
$today = new DateTime();
$birthDate = new DateTime($dob);
$nextBirthday = new DateTime(date("Y") . "-" . $birthDate->format("m-d"));
if ($nextBirthday < $today) {
    $nextBirthday->modify("+1 year");
}
$daysLeft = $today->diff($nextBirthday)->days;
echo "Days left until next birthday: $daysLeft";
?>

