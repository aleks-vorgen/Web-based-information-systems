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
        return "Square: " . $this->square . "\n"
            . "Residents: " . $this->residents_number . "\n"
            . "Language: " . $this->language . "\n";
    }
}