<?php
class Visitor extends Coor {
    public function showWelcomeMessage(): void {
        echo "Hi " . $this->getName() . ", welcome to our shop! To buy something, please, register!\n";
    }

    public function newMessage($subject): void {
        echo "Creating new message: $subject\n";
    }
}