<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$scanner = new Scanner("Xerox", "213874523", 30);
echo $scanner->getScanTime(130);
$scanner->print("Printing some text");