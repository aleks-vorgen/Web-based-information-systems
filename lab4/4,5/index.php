<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$country = new Country(10, 100, "ukrainian", "Ukraine");
echo $country->getSquare();