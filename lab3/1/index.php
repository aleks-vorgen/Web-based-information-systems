<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$shopper = new Shopper("Oleksii", "Kulykov");
$visitor = new Visitor("Bogdan", "Kusch");

$shopper->showWelcomeMessage();
$visitor->showWelcomeMessage();

$shopper->addToCart("IPhone");
$visitor->newMessage("Hello there");