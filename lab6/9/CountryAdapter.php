<?php

class Country {
    public float $square;
    public int $residents_number;
    public string $language;
    private string $title;

    public function __construct($square, $residents_number, $language, $title) {
        $this->square = $square;
        $this->residents_number = $residents_number;
        $this->language = $language;
        $this->title = $title;
    }

    public function getSquare(): float { return $this->square; }
    private function getTitle(): string { return $this->title; }
    public function getTitlePublic(): string { return $this->getTitle(); }

    public function __toString(): string
    {
        return "Title: " . $this->title . "\n"
            . "Square: " . $this->square . "\n"
            . "Residents: " . $this->residents_number . "\n"
            . "Language: " . $this->language . "\n";
    }
}

interface CountryAdapterInterface {
    public function getTitle(): string;
}

class CountryAdapter implements CountryAdapterInterface {
    private $country;

    public function __construct(Country $country) {
        $this->country = $country;
    }

    public function getTitle(): string {
        return $this->country->getTitlePublic();
    }
}

$country = new Country(100000, 5000000, 'English', 'Example Country');
$adapter = new CountryAdapter($country);

echo $adapter->getTitle();