<?php
$originalFile = "data.txt";
if (file_exists($originalFile)) {
    $timestamp = date("Y-m-d_H-i");
    $backupFile = "data_" . $timestamp . ".txt";
    copy($originalFile, $backupFile);
    echo "Backup created: $backupFile";
} else {
    echo "Original file not found!";
}
?>
