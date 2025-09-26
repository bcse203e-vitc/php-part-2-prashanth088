<?php
$students = [
    "Rahul" => 85,
    "Priya" => 92,
    "Arun" => 78,
    "Sneha" => 88,
    "Vikram" => 95,
    "Anjali" => 80
];
arsort($students);
$top_students = array_slice($students, 0, 3, true);
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Rank</th><th>Name</th><th>Marks</th></tr>";
$rank = 1;
foreach ($top_students as $name => $marks) {
    echo "<tr>";
    echo "<td>$rank</td>";
    echo "<td>$name</td>";
    echo "<td>$marks</td>";
    echo "</tr>";
    $rank++;
}
echo "</table>";
?>
