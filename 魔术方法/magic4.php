<?php

class Test
{
    public $name;
    public $age;

    public function __construct($name = 'huyy', $age = 18)
    {
        $this->name = $name;
        $this->age  = $age;
    }

    public function __clone()
    {
        // TODO: Implement __clone() method.
        echo __METHOD__;
    }

    public function say()
    {
        echo 'i\'m ' . $this->name . ', my age is ' .$this->age;
    }

}

$obj = new Test('guyue', 19);

$obj1 = clone $obj;

var_dump($obj);
echo '<br/>';
var_dump($obj1);
$obj1->say();
