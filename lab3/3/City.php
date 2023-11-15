<?php

class City extends Square {
    public string $title;
    public int $square;

    public function __construct(string $title, int $square) {
        $this->title = $title;
        $this->square = $square;
    }

    public function getSquare(): int {
        return $this->square;
    }

    public function setSquare(int $square): void {
        $this->square = $square;
    }

    public function __toString(): string {
        return "Title: $this->title" . "\n"
            . "Square: $this->square";
    }
}