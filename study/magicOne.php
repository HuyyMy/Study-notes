<?php

/**
 * Created by PhpStorm.
 * User: hyy
 * Date: 2017/10/10
 * Time: 17:30
 */
class magicOne
{
    public $name;
    public $age;
    public $sex;

    public function __construct($name = 'HYY', $age = '23', $sex = '男')
    {
        $this->name = $name;
        $this->age  = $age;
        $this->sex  = $sex;
    }

    /**
     * 调用
     */
    public function say()
    {
        echo '我是'.$this->name.',我的性别是'.$this->sex.',今年'.$this->age.'岁了。';
    }

    /**
     * 析构方法
     */
    public function __destruct()
    {
        echo "我觉得我是神，我的名字叫".$this->name;
    }
}

$person =  new magicOne();
unset($person);
/**
 * 此时输出：我觉得我是神，我的名字叫HYY
 */