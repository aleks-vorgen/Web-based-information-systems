<?php
class Point {
    public int $x;
    public int $y;

    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function __toString(): string {
        return $this->x.", ".$this->y;
    }
}