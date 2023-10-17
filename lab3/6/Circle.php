<?php

class Circle implements Figure {
    public Point $center;
    public int $r;

    public function __construct(Point $center, $r) {
        $this->center = $center;
        $this->r = $r;
    }

    function draw(): string {
        return "Center: [$this->center]\n"
            ."Radius: $this->r\n";
    }

    function erase(): void {
        unset($this->center, $this->r);
    }

    function move(): void {
        echo "Moved\n";
    }

    function getColor(): string {
        return "Color\n";
    }

    function setColor(): void {
        echo "Color changed\n";
    }

}
