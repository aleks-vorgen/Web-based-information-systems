<?php

class Triangle implements Figure {
    public Point $top;
    public Point $left;
    public Point $right;

    public function __construct(Point $top, Point $left, Point $right) {
        $this->top = $top;
        $this->left = $left;
        $this->right = $right;
    }


    function draw(): string {
        return "Top: [$this->top]\n"
            ."Left: [$this->left]\n"
            ."Right: [$this->right]\n";
    }

    function erase(): void {
        unset($this->top, $this->left, $this->right);
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