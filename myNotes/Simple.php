<?php

/**
 * Created by PhpStorm.
 * User: hyy
 * Date: 2017/7/24
 * Time: 9:52
 */

class A
{
    static function foo()
    {
        if (isset($this)) {
            echo '$this is defined (';
            echo get_class($this);
            echo ")\n";
        } else {
            echo "\$this is not defined.\n";
        }
    }
}

class B extends A
{
    function bar()
    {
        // Note: the next line will issue a warning if E_STRICT is enabled.
        A::foo();
    }
}

A::foo();
$b = new B();
$b->bar();
