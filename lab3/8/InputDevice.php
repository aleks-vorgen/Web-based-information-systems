<?php

class InputDevice implements Printable {
    private string $title;
    private string $inventNumber;

    public function __construct(string $title, string $inventNumber) {
        $this->title = $title;
        $this->inventNumber = $inventNumber;
    }

    public function getTitle(): string { return $this->title; }

    public function setTitle(string $title): void { $this->title = $title; }

    public function getInventNumber(): string { return $this->inventNumber; }

    public function setInventNumber(string $inventNumber): void { $this->inventNumber = $inventNumber; }

    public function print(string $text): void {
        echo $text."\n";
    }

    public function __toString(): string {
        return "Title: " . $this->title . "\n"
            ."Inventory number: " . $this->inventNumber . "\n";
    }

    public function __destruct() {
        echo "Destructing device: " . $this->title . "\n";
    }
}