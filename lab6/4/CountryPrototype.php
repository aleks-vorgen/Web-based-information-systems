<?php

class CountryPrototype {
    private $country;

    public function __construct(Country $country) {
        $this->country = $country;
    }

    public function clone(): Country {
        // Використовуємо клонування для створення нового об'єкта
        return clone $this->country;
    }
}

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

// Приклад використання
$originalCountry = new Country(100000, 50000000, 'English', 'Original Country');
$prototype = new CountryPrototype($originalCountry);

// Створення нової копії країни на основі прототипу
$newCountry = $prototype->clone();
$newCountry->square = 150000;  // Можна змінити дані нової країни

// Виведення інформації про нову країну
echo $originalCountry."\n";
echo "[Clone with edited square]\n";
echo $newCountry;