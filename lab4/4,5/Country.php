<?php

//Створення класу
use JetBrains\PhpStorm\Pure;

class Country extends Square {

    //Створення полів класу
    public int $square;
    public int $residents_number;
    public string $language;
    private string $title;
    use GetterTrait;
    use SetterTrait;

    public function __construct($square, $residents_number, $language, $title) {
        $this->square = $square;
        $this->residents_number = $residents_number;
        $this->language = $language;
        $this->title = $title;
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