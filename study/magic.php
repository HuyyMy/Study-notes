<?php

/**
 * Created by PhpStorm.
 * User: hyy
 * Date: 2017/9/30
 * Time: 17:42
 */
class Person
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

}

$person = new Person();
$person->say();
/**
 * 此时输出：我是HYY,我的性别是男,今年23岁了。
 */

$person = new Person('hyy','二十三','man');
$person->say();
/**
 * 此时输出：我是hyy,我的性别是man,今年二十三岁了 cao。
 */
