<?php
/**
 * Created by PhpStorm.
 * User: hyyph
 * Date: 2018/7/30
 * Time: 9:48
 */

Abstract class AbstractAlly
{
    /**
     * @var
     */
    public $players;

    /**
     * 将所有人添加到$players
     *
     * @param $play
     */
    public function addObserver($play)
    {
        $this->players[] = new OberServer($play);
    }

    /**
     * 执行帮助
     *
     * @param $play
     */
    public function notify($play)
    {
        foreach ($this->players as $player) {
            // 是否是被帮助者
            if ($player != $play) {
                $player->help($play);
            }
        }
    }

    abstract public function attack($play);
}

class Ally extends AbstractAlly
{
    /**
     * Ally constructor.
     * @param array $array
     */
    public function __construct(array &$array)
    {
        // 将所有人添加到$players
        foreach ($array as $play) {
            $this->addObserver($play);
        }
    }

    /**
     * @param $play
     */
    public function attack($play)
    {
        // 监听盟友是否被监听
        $this->notify($play);
    }
}

interface Observer
{
    /**
     * @param $play
     * @return mixed
     */
    public function help($play);
}

class OberServer implements Observer
{
    /**
     * @var
     */
    public $name;

    /**
     * OberServer constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name=$name;
    }

    /**
     * @param $play
     */
    public function help($play)
    {
        echo $this->name . '帮助了' . $play . '<br/>';
    }

}

$players = ['张三', '李四', '网二', '麻子'];

$obj = new Ally($players);
$obj->attack('hyy');
