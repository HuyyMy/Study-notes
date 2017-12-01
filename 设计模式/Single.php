<?php

/**
 * Created by PhpStorm.
 * User: hyy
 * Date: 2017/12/1
 * Time: 11:02
 */
class Single
{
    //私有的静态属性保存实例
    private static $conn;
    // 构建private函数，防止创建对象
    private function __construct()
    {
        self::$conn = mysqli_connect('localhost', 'root', 'pwd');
    }

    public function getConn()
    {
        if (!(self::$conn instanceof self)) {
            self::$conn = new self;
        }

        return self::$conn;
    }

    // 防止克隆对象
    public  function __clone()
    {
        // TODO: Implement __clone() method.
        trigger_error('Clone is not allowed');
    }
}