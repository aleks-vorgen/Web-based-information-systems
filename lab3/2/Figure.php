<?php

abstract class Figure {
    public Point $first;
    public Point $second;
    public Point $third;

    public function __construct(Point $first, Point $second, Point $third) {
        $this->first = $first;
        $this->second = $second;
        $this->third = $third;
    }


    abstract public function area();
}