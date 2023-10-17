<?php

trait PrintTrait {
    function printDate($message): void {
        echo date("F j, Y, g:i a") . ": " . $message . "\n";
    }
}