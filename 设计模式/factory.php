<?php
/**
 * Created by PhpStorm.
 * User: hyyph
 * Date: 2018/7/30
 * Time: 10:24
 */

/**
 * Interface SuperHero
 */
interface SuperHero
{
    /**
     * @return mixed
     */
    public function say();
}

class IronMan implements SuperHero
{
    /**
     * @return mixed|void
     */
    public function say()
    {
        // TODO: Implement say() method.
        echo 'I\'m IronMan';
    }
}

class SpiderMan implements SuperHero
{
    /**
     * @return mixed|void
     */
    public function say()
    {
        // TODO: Implement say() method.
        echo 'I\'m SpiderMan';
    }
}

class SimpleFactory
{
    /**
     * @return IronMan
     */
    static function createdIronMan()
    {
        return new IronMan();
    }

    /**
     * @return SpiderMan
     */
    static function createdSpiderMan()
    {
        return new SpiderMan();
    }
}

$obj1 = SimpleFactory::createdIronMan();
$obj1->say();
echo '<br/>';
$obj2 = SimpleFactory::createdSpiderMan();
$obj2->say();
