<?php

class A {
    function example(): void {
        echo "This is parent function A::example().\n";
    }
}

class B extends A {
    function example(): void {
        echo "This  is  overridden  function B::example().\n";
        A::example();
    }
}

$b = new B;
$b->example();