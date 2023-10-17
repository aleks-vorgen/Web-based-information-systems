<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$visitor = new Visitor("Bogdan", "Kusch");
$visitor->newMessage("Hello there");
$visitor->newMessage("Another hello there");
$visitor->newMessage("And another one");