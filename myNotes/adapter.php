<?php

/**
 *适配器模式
 *
 *@author huyueyang<hyyphp@163.com>
 *@date  2017-7-22 20:46:25
 */

/**
 * 目标角色
 */
interface Target
{
    /**
     * 源类也有的方法1
     */
    public function sampleMethodOne();

    /**
     * 源类也有的方法2
     */
    public function sampleMethod();
}

/**
 * 源角色
 */
class Adaptee
{
    /**
     * 源类含有的方法
     */
    public function sampleMethodOne()
    {
        echo 'I\'m one';
    }
}

/**
 * 类适配器角色
 */
class Adapter extends Adaptee implements Target
{
    /**
     * 源类没有sampleMethod方法，在此补充
     */
    public function sampleMethod()
    {
        echo 'I\'m two';
    }
}

class Client
{
    /**
     * Main program
     */
    public static function main()
    {
        $adapter = new Adapter();
        $adapter->sampleMethodOne();
        $adapter->sampleMethod();
    }

}
