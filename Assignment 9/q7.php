<?php
function calculateAverage($arr) {
    if (empty($arr)) {
        throw new Exception("No numbers provided");
    }
    return array_sum($arr) / count($arr);
}
$arrays = [
    [10, 20, 30, 40, 50],
    [],
    [5, 15, 25]
];
foreach ($arrays as $index => $numbers) {
    echo "Array " . ($index + 1) . ": ";
    try {
        $avg = calculateAverage($numbers);
        echo "Average = " . $avg . "<br>";
    }
    catch (Exception $e) {
        echo "Error: " . $e->getMessage() . "<br>";
    }
}
?>

