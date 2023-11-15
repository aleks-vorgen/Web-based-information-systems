<?php
require "./Country.php";
require "./CountryFactories.php";
$ukraineFactory = new UkraineFactory();
$ukraine = $ukraineFactory->createCountry();
echo $ukraine;

$usaFactory = new USAFactory();
$usa = $usaFactory->createCountry();
echo $usa;