<?php

class Square implements Figure {
    public Point $first;
    public int $long;

    public function __construct(Point $first, int $long) {
        $this->first = $first;
        $this->long = $long;
    }

    function draw(): string {
        return "Top left: [$this->first]\n"
            ."Bottom right: [$this->long]\n";
    }

    function erase(): void {
        unset($this->first, $this->long);
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