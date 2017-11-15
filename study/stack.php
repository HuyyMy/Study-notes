<?php
/**
 * Created by PhpStorm.
 * User: hyy
 * Date: 2017/11/15
 * Time: 13:46
 */

class Stack
{
    private $array = [];
    private $key = null;

    /**
     * @param $data
     */
    public function push($data)
    {
        if ($this->key === null) {
            $this->key = 0;
        } else {
            $this->key++;
        }

        $this->array[$this->key] = $data;
    }

    /**
     * @return bool|mixed
     */
    public function pop()
    {
        if (empty($this->array)) {
            return false;
        }

        $ret = $this->array[$this->key];
        array_splice($this->array, $this->key);
        $this->key--;

        return $ret;
    }

    public function getData()
    {
        return $this->array;
    }
}

$stack = new Stack();

$stack->push('hu');
$stack->push('yue');
$stack->push('yang');
$stack->push('shi');
$stack->push('ge');
$stack->push('xiao');
$stack->push('cai');
$stack->push('ji');

$array = $stack->getData();
var_dump($array);
/**
 * 此时:
 * array(8) {
 *      [0]=>
 *      string(2) "hu"
 *      [1]=>
 *      string(3) "yue"
 *      [2]=>
 *      string(4) "yang"
 *      [3]=>
 *      string(3) "shi"
 *      [4]=>
 *      string(2) "ge"
 *      [5]=>
 *      string(4) "xiao"
 *      [6]=>
 *      string(3) "cai"
 *      [7]=>
 *      string(2) "ji"
 *      }
 */
echo '<br>';
$pop = $stack->pop();
var_dump($pop);
/**
 *此时：
 *  string(2) "ji"
 */
echo '<br>';
$data = $stack->getData();
var_dump($data);
/**
 * 此时:
 * array(8) {
 *      [0]=>
 *      string(2) "hu"
 *      [1]=>
 *      string(3) "yue"
 *      [2]=>
 *      string(4) "yang"
 *      [3]=>
 *      string(3) "shi"
 *      [4]=>
 *      string(2) "ge"
 *      [5]=>
 *      string(4) "xiao"
 *      [6]=>
 *      string(3) "cai"
 *      }
 */
$str = $stack->pop();
