<?php

class Test
{
    private $name;
    private $age;

    public function __construct($name, $age = 15)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __get($name)
    {
        // TODO: Implement __get() method.
        return $this->$name;
    }

    public function say()
    {
        echo 'I\'m ' . $this->name . ', my age is ' . $this->age;
    }
}

$obj = new Test('hyy', '20');
$obj->name = 'huyy';
$obj->age  = 18;
$obj->say();
echo '<br/>';
echo $obj->name;
