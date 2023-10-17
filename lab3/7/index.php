<?php
interface Int1 {
    function func1();
}

interface Int2 {
    function func2();

}

class MyClass implements Int1, Int2 {
    public function func1() {
        echo 1;
    }
    public function func2() {
        echo 2;
    }
}

$obj = new MyClass;
$obj->func1();
$obj->func2();