<?php

include "CSVCountryReader.php";

$countries = new Countries([
    new Country(10, 100, "ukrainian", "Ukraine"),
    new Country(100, 1000, "english", "England"),
    new Country(1000, 10000, "spanish", "Spain"),
    new Country(10000, 100000, "german", "Germany"),
    new Country(100000, 1000000, "French", "France")
]);
$csv = new CSVCountryReader("file.csv");

$csv->objectsToCSV($countries);

try {
    $get_csv = $csv->getCSV();
    foreach ($get_csv as $value) {
        if (!$value[0] || !$value[1] || !$value[2] || !$value[3])
            continue;

        echo "Square: ".$value[0]."\n";
        echo "Residents number: ".$value[1]."\n";
        echo "Language: ".$value[2]."\n";
        echo "Title: ".$value[3]."\n";
        echo "-----------\n";
    }
} catch (Exception $e) {
    echo "Помилка: ".$e->getMessage();
}