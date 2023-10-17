<?php
class Circle extends Figure {
    public float $radius;

    public function __construct(Point $first, Point $second, Point $third, $radius)
    {
        parent::__construct($first, $second, $third);
        $this->radius = $radius;
    }

    public function area(): float|int {
        return round(pow(pi() * $this->radius, 2), 3);
    }
}