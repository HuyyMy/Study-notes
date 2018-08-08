<?php

class Test
{
    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
        echo 'func1 is not exist';
    }

    static public function __callStatic($name, $arguments)
    {
        // TODO: Implement __call() method.
        echo 'func2 is not exist';
    }
}

$obj = new Test();
$obj->getCall();
// 输出：func1 is not exist
echo PHP_EOL;
Test::gttCallStatic();
// 输出 ：func2 is not exist
