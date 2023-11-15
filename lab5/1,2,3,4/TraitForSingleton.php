<?php

trait TraitForSingleton {
    private function __construct() {}
    private function __clone() {}

    public static function getInstance(): self {
        if (self::$_instance === null) {
            echo "This line will only be printed once, because of initializing an instance\n\n";
            self::$_instance = new self;
        }
        else{
            echo "This line will always be printed, because the instance was already initiated\n\n";
        }
        return self::$_instance;
    }
}