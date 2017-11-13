<?php
/**
 * Created by PhpStorm.
 * User: hyy
 * Date: 2017/11/10
 * Time: 18:25
 */
trait Animal
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
    
}
