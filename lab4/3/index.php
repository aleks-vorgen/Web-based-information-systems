<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$fileLogger = new FileLogger("./log.txt");
$fileLogger->log('Log message');
$fileLogger->log('Another log message');