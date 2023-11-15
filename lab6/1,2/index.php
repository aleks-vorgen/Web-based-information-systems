<?php

// 1
class ClassA {
    public function __construct(ClassA $Prototype = null) {
        if (null !== $Prototype) {
            //do something
        }
    }
}

$Prototype = new ClassA();
$NewObject = new ClassA($Prototype);


// 2
class ClassB {
    public function getClone() {
        $object = new ClassB();
        return $object;
    }
}

$Prototype = new ClassB();
$NewObject = $Prototype->getClone();


// 3
class ClassC {
    public function __clone() {
        //do something
    }
}

$Prototype = new ClassC();

$NewObject = clone $Prototype;