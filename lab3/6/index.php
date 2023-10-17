<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$figures = [
    new Circle(new Point(0, 0), 2),
    new Square(new Point(1, -1), 2),
    new Triangle(new Point(0, 2), new Point(-2, 0), new Point(2, 0))
];

foreach ($figures as $figure) {
    echo $figure->draw()."\n";
    echo $figure->erase();
}