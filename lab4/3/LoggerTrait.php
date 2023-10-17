<?php

trait LoggerTrait {
    function log($message): void {
        $message = date("F j, Y, g:i a") . ": " . $message . "\n";
        fwrite($this->file, $message);
    }
}