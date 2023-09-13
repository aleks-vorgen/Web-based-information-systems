<?php

include 'Countries.php';
include 'Country.php';

$countries = new Countries([
        new Country(10, 100, "ukrainian", "Ukraine"),
        new Country(100, 1000, "english", "England"),
        new Country(1000, 10000, "spanish", "Spain"),
        new Country(10000, 100000, "german", "Germany"),
        new Country(100000, 1000000, "French", "France")]
);
$country = $countries->search("spain");
echo "Search:"."\n";
echo $country."\n";
echo "Private method:"."\n";
echo $country->getTitlePublic()."\n\n";
echo "ShowObjects():"."\n";
$countries->showObjects();
