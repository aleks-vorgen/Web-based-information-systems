<?php

class CountryFactory {
    public static function create($square, $residents_number, $language, $title) {
        return new Country($square, $residents_number, $language, $title);
    }
}