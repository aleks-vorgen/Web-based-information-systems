<?php
class Shopper extends Coor {
    public function showWelcomeMessage(): void {
        echo "Hi " . $this->getName() . ", welcome to our online store!\n";
    }

    public function addToCart($item): void {
        echo "Adding $item to cart\n";
    }

}