<?php

interface CountryFactory {
    public function createCountry(): Country;
}

class UkraineFactory implements CountryFactory {
    public function createCountry(): Country {
        return new Country(603500, 41410000, 'Ukrainian', 'Ukraine');
    }
}

class USAFactory implements CountryFactory {
    public function createCountry(): Country {
        return new Country(9834000, 331000000, 'English', 'United States');
    }
}