<?php

class Motorcycle extends Vehicle {
    public string $engine;
    public string $color;
    public string $type;

    public function __construct(string $country, string $brand, int $year,
                                string $engine, string $color, string $type) {
        parent::__construct($country, $brand, $year);
        $this->engine = $engine;
        $this->color = $color;
        $this->type = $type;
    }

    public function __toString(): string {
        return parent::__toString().", $this->engine, $this->color, $this->type";
    }
}