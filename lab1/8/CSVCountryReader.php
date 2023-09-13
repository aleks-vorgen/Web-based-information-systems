<?php
include "../3. Article/Country.php";
include "../3. Article/Countries.php";
include "../7/CSVReader.php";

class CSVCountryReader extends CSV {
    public function objectsToCSV(Countries $objects): void {
        foreach ($objects->getCountries() as $object) {
            $csv = $object->getSquare().";"
                .$object->getResidentsNumber().";"
                .$object->getLanguage().";"
                .$object->getTitlePublic();
            $this->setCSV(array($csv));
        }
    }
}