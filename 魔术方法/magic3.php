<?php

class Test
{
    public $name;
    public $sex;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->sex  = $age;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return 'i\'m ' . $this->name . ', my age is ' . $this->sex;
    }

    public function __invoke($name)
    {
        // TODO: Implement __invoke() method.
        echo 'here is '.$name;
    }
}
$obj = new Test('hyy', 18);
echo $obj;
// 输出：i'm hyy, my age is 18
$obj('xiaohu');
// 输出 ：here is xiaohu
