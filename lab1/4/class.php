<?php

class Coor {
    private string $name;
    private string $login;
    private string $password;
    function __construct($name, $login, $password) {
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;
    }

    public function getName(): void {
        echo "Name: " . $this->name . "\n";
    }

    public function __destruct()
    {
        print "Destroying ".$this->name."\n";
    }

    public function __toString(): string
    {
        return $this->name." | ".$this->login." | ".$this->password;
    }


}

$object1 = new Coor("Nick1", "Login1", "Pass1");
$object2 = new Coor("Nick2", "Login2", "Pass2");
$object3 = new Coor("Nick3", "Login3", "Pass3");

echo $object1."\n".$object2."\n".$object3."\n";