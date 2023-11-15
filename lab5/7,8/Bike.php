<?php

class Bike extends Vehicle {
    public int $weight;
    public string $type;
    public int $wheelDiameter;

    public function __construct(string $country, string $brand, int $year,
                                int $weight, string $type, int $wheelDiameter) {
        parent::__construct($country, $brand, $year);
        $this->weight = $weight;
        $this->type = $type;
        $this->wheelDiameter = $wheelDiameter;
    }

    public function __toString(): string {
        return parent::__toString().", $this->weight, $this->type, $this->wheelDiameter";
    }
}