<?php

class Test
{
    private $name;
    private $age;
    private $sex;
    private $both;

    public function __construct($name, $age = 15, $sex = 'boy', $both = '20')
    {
        $this->name = $name;
        $this->age  = $age;
        $this->sex  = $sex;
        $this->both = $both;
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

    public function __isset($name)
    {
        // TODO: Implement __isset() method.
        echo 'No <br/>';
        return var_dump(isset($this->$name));
    }

    public function __unset($name)
    {
        // TODO: Implement __unset() method.
        echo 'yes';
        unset($this->$name);
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
echo '<br/>';
echo isset($obj->sex);
echo '<br/>';
echo isset($obj->both);
echo '<br/>';
unset($obj->both);
echo '<br/>';
echo isset($obj->both);

//输出：
//I'm huyy, my age is 18
//huyy
//No
//bool(true)
//No
//bool(true)
//yes
//No
//bool(false)
