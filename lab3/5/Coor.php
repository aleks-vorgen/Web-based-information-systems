<?php

abstract class Coor {
    private string $firstName;
    private string $lastName;

    public function __construct($firstName, $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function setName($firstName, $lastName): void {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getName(): string {
        return "$this->firstName $this->lastName";
    }

    abstract public function showWelcomeMessage();
}