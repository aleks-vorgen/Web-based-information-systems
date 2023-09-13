<?php

//Створення класу
use JetBrains\PhpStorm\Pure;

class Country {

    //Створення полів класу
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

    //Створення гетерів, сетерів та show методів
    public function getSquare(): float
    {
        return $this->square;
    }

    public function setSquare($square): void
    {
        $this->square = $square;
    }

    public function getResidentsNumber(): int
    {
        return $this->residents_number;
    }

    public function setResidentsNumber($residents_number): void
    {
        $this->residents_number = $residents_number;
    }

    public function getLanguage(): string
    {
        return $this->language;
    }

    public function setLanguage($language): void
    {
        $this->language = $language;
    }

    public function showSquare(): void
    {
        echo $this->square;
    }

    public function showResidentsNumber(): void
    {
        echo $this->residents_number;
    }

    public function showLanguage(): void
    {
        echo $this->language;
    }

    private function getTitle(): string
    {
        return $this->title;
    }

    #[Pure] public function getTitlePublic(): string
    {
        return $this->getTitle();
    }

    public function __toString(): string
    {
        return "Square: ".$this->square."\n"
            ."Residents: ".$this->residents_number."\n"
            ."Language: ".$this->language."\n";
    }


}