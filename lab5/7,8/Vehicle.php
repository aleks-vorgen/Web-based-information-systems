<?php

class Vehicle {
    public string $country;
    public string $brand;
    public int $year;

    public function __construct(string $country, string $brand, int $year) {
        $this->country = $country;
        $this->brand = $brand;
        $this->year = $year;
    }

    public function __toString(): string {
        return "$this->country, $this->brand, $this->year";
    }
}