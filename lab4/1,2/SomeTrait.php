<?php

trait SomeTrait {
    public function traitFoo(): void {
        echo "Hello world";
    }

    public function traitDay(): void {
        date_default_timezone_set("Europe/Kyiv");
        $now = date("H");
        switch ($now) {
            case ($now < 6): echo "Good night!"; break;
            case ($now < 12): echo "Good morning!"; break;
            case ($now < 18): echo "Good afternoon!"; break;
            case ($now <=23): echo "Good evening!"; break;
        }
    }
}