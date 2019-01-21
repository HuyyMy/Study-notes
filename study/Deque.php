<?php


class Deque
{
    private $queue = [];

    /**
     * 头入队
     *
     * @param $item
     */
    public function addFirst($item)
    {
        array_unshift($this->queue, $item);
    }

    /**
     * 尾入队
     *
     * @param $item
     */
    public function addLast($item)
    {
        array_push($this->queue, $item);
    }

    /**
     * 头出队
     */
    public function removeFirst()
    {
        array_shift($this->queue);
    }

    /**
     * 尾出队
     */
    public function removeLast()
    {
        array_pop($this->queue);
    }

    /**
     * 获取队头
     *
     * @return mixed
     */
    public function getFirst()
    {
        return reset($this->queue);
    }

    /**
     * 获取队尾
     *
     * @return mixed
     */
    public function getEnd()
    {
        return end($this->queue);
    }

    public function show()
    {
        foreach ($this->queue as $item) {
            echo $item . ' ';
        }
        echo '<br/>';
    }
}

$deque = new Deque();
$deque->addFirst(2);
$deque->addLast(3);
$deque->addLast(4);
$deque->addFirst(5);
//$deque->show();
$deque->getEnd();
$deque->getFirst();

// 结果 ：5 2 3 4 
