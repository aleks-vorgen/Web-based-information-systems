<?php
include "CSVReader.php";

try {
    $csv = new CSV("file.csv");
    $get_csv = $csv->getCSV();
    foreach ($get_csv as $value) {
        echo "First name: " . $value[1] . "\n";
        echo "Last name: " . $value[0] . "\n";
        echo "Position: " . $value[2] . "\n";
        echo "Salary: " . $value[3] . "\n";
        echo "--------\n";
    }
    $arr = array("Ponomarenko;Ivan;SEO;20000");
    $csv->setCSV($arr);
} catch (Exception $e) {
    echo "Помилка: " . $e->getMessage();
}