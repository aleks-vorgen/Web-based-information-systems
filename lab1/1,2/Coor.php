<?php

class Coor
{

    private string $name;

    function getName(): string
    {
        return $this->name;
    }

    function setName($text): void
    {
        $this->name = $text;
    }

}

$object = new Coor;

$object->Setname("Nick");

echo $object->Getname()."\n";

$works = array();

$works[0] = new Coor();

$works[0]->setName("Nick");

$works[1] = new Coor();

$works[1]->setName("Nick 1");

$works[2] = new Coor();

$works[2]->setName("Nick 2");

for ($i = 0; $i < 3; $i++) {
    echo $works[$i]->getName()."\n";
}