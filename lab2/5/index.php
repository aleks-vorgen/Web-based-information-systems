<?php
spl_autoload_register(function ($class_name) {
    include "../2/" . $class_name . '.php';
});

$scanner = new Scanner("Xerox", "213874523", 30);
echo $scanner->getTitle() . " is " . ($scanner::getIsPowered() ? "turned on" : "turned off") . "\n";
$scanner::setIsPowered(true);
echo $scanner->getTitle() . " is " . ($scanner::getIsPowered() ? "turned on" : "turned off") . "\n";