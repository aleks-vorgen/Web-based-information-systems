<?php
trait CountryInfo {
    public function getTitlePublic(): string {
        return $this->getTitle();
    }

    public function __toString(): string {
        return "Title: " . $this->title . "\n"
            . "Square: " . $this->square . "\n"
            . "Residents: " . $this->residents_number . "\n"
            . "Language: " . $this->language . "\n";
    }

    private function getTitle(): string {
        return $this->title;
    }
}

// Абстрактна фабрика
interface CountryFactory {
    public function createCountry(float $square, int $residents_number, string $language, string $title): Country;
}

// Конкретна фабрика для конкретної країни (наприклад, Україна)
class UkraineCountryFactory implements CountryFactory {
    public function createCountry(float $square, int $residents_number, string $language, string $title): Country {
        return new Country($square, $residents_number, $language, $title);
    }
}

// Конкретна фабрика для іншої країни (наприклад, Іспанія)
class SpainCountryFactory implements CountryFactory {
    public function createCountry(float $square, int $residents_number, string $language, string $title): Country {
        // Тут можна використовувати інші класи або логіку для створення країни
        return new Country($square, $residents_number, $language, $title);
    }
}

// Клас країни з підтримкою трейта і конструктора фабрики
class Country {
    use CountryInfo;

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
}

// Використання фабрик
$ukraineFactory = new UkraineCountryFactory();
$ukraine = $ukraineFactory->createCountry(603, 44000000, 'Ukrainian', 'Ukraine');
echo $ukraine;

$spainFactory = new SpainCountryFactory();
$spain = $spainFactory->createCountry(505, 47000000, 'Spanish', 'Spain');
echo $spain;