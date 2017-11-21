<?php
/**
 * Created by PhpStorm.
 * User: hyy
 * Date: 2017/11/10
 * Time: 18:25
 */
trait Animals
{
    private $day = 1;
    public function checkout()
    {
        if ($this->day) {
            echo '我是一只小鸭子';
        } else {
            echo '我是一只小猫咪';
        }
    }
}

class Behavior
{
    public $name = 'hhhhsdgajjdsa';
    public function checkout()
    {
        echo 'yy is a funny guy';
    }
}

class Animal extends Behavior
{
    //use Animals;
    public function animal()
    {
       echo  'who are you ?'. $this->name.';';
    }
}

$animal = new Animal();
//$animal->animal();
