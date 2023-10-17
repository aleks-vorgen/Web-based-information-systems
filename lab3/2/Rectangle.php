<?php
class Rectangle extends Figure {
    public float $a;
    public float $b;

    public function __construct(Point $first, Point $second, Point $third, $a, $b)
    {
        parent::__construct($first, $second, $third);
        $this->a = $a;
        $this->b = $b;
    }

    public function area(): float|int {
        return $this->a * $this->b;
    }
}