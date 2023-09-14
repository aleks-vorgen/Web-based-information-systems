<?php

class Countries
{
    public array $countries;

    public function getCountries(): array
    {
        return $this->countries;
    }

    public function __construct($countries)
    {
        $this->countries = $countries;
    }

    public function search($language):Country {
        $key = array_search($language,
            array_column($this->countries, 'language'));
        return $this->countries[$key];
    }

    public function showObjects(): void {
        $countries = "";
        foreach ($this->countries as $country) {
            $countries .= $country."\n";
        }

        echo $countries;
    }

    public function __toString(): string
    {
        $countries = "";
        foreach ($this->countries as $country) {
            $countries .= $country."\n";
        }

        return $countries;
    }
}
