<?php
/**
 * Created by PhpStorm.
 * User: hyyph
 * Date: 2018/7/27
 * Time: 9:48
 */

class Singleton
{
    /**
     * @var
     */
   static private $obj;

    /**
     * @var int
     */
   protected $param;

    /**
     * Singleton constructor.
     * @param $param
     */
   protected function __construct($param)
   {
        $this->param = $param;
   }

    /**
     * @param $obj
     * @return Singleton
     */
   static public function getObj($obj)
   {
        if (! self::$obj instanceof self) {
            self::$obj = new self($obj);
        }

        return self::$obj;
   }

   public function getName()
   {
        echo $this->param;
   }

    /**
     * 禁止外部克隆
     */
   private function __clone()
   {
       // TODO: Implement __clone() method.
       trigger_error('Clone is not allowed');
   }
}

$obj = Singleton::getObj(2);
$obj->getName();
echo '<br/>';
$obj = Singleton::getObj(4);
$obj->getName();
