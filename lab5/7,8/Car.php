<?php

class Car extends Vehicle {
    public string $engine;
    public int $power;
    public string $color;

    public function __construct(string $country, string $brand, int $year,
                                string $engine, int $power, string $color) {
        parent::__construct($country, $brand, $year);
        $this->engine = $engine;
        $this->power = $power;
        $this->color = $color;
    }

    public function __toString(): string {
        return parent::__toString().", $this->engine, $this->power, $this->color";
    }
}