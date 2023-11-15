<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$c1 = CountryFactory::create(10, 100, "ukrainian", "Ukraine");
$c2 = CountryFactory::create(100, 1000, "english", "England");
$c3 = CountryFactory::create(1000, 10000, "spanish", "Spain");

echo $c1;
echo $c2;
echo $c3;