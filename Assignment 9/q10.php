<?php
$lines = file("students.txt", FILE_IGNORE_NEW_LINES);
$errorFile = "errors.log";
$valid = [];
foreach ($lines as $line) {
    $parts = explode(",", $line);
    if (count($parts) != 3) {
        file_put_contents($errorFile, "$line - Missing fields\n", FILE_APPEND);
        continue;
    }
    list($name, $email, $dob) = $parts;
    if (!preg_match("/^[\w\.-]+@[\w\.-]+\.\w{2,}$/", $email)) {
        file_put_contents($errorFile, "$line - Invalid email\n", FILE_APPEND);
        continue;
    }
    $age = (new DateTime($dob))->diff(new DateTime())->y;
    $valid[] = ["name" => $name, "email" => $email, "age" => $age];
}
echo "<table border='1' cellpadding='5' cellspacing='0'>
<tr><th>Name</th><th>Email</th><th>Age</th></tr>";
foreach ($valid as $student) {
    echo "<tr><td>{$student['name']}</td><td>{$student['email']}</td><td>{$student['age']}</td></tr>";
}
echo "</table>";
?>

