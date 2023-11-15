<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$car = Factory::createVehicle("car");
echo $car."\n";
$bike = Factory::createVehicle("bike");
echo $bike."\n";
$motorcycle = Factory::createVehicle("motorcycle");
echo $motorcycle."\n";
$plane = Factory::createVehicle("plane");
echo $plane."\n";