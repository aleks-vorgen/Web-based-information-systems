<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$circle = new Circle(new Point(-1, 0), new Point(1, 0), new Point(0, 1), 4);
$rectangle = new Rectangle(new Point(-1, 1), new Point(1, -1), new Point(0, 0),4, 6.5);


echo "S[circ] = " . $circle->area() . "\n";

echo "S[rect] = " . $rectangle->area() . "\n";
