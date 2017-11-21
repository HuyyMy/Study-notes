<?php
/**
 * Created by PhpStorm.
 * User: hyy
 * Date: 2017/11/16
 * Time: 15:35
 */

function quickSort(&$arr){
    if(count($arr)>1){
        $k=$arr[0];
        $x=array();
        $y=array();
        $_size=count($arr);
        for($i=1;$i<$_size;$i++){
            if($arr[$i]<=$k){
                $x[]=$arr[$i];
            }elseif($arr[$i]>$k){
                $y[]=$arr[$i];
            }
        }
        $x=quickSort($x);
        $y=quickSort($y);
        return array_merge($x,array($k),$y);
    }else{
        return$arr;
    }
}

function quick($array)
{
    if (count($array)) {
        $k = $array[0];
        $x = [];
        $y = [];
        $num = count($array);

        for ($i = 1; $i < $num; $i++) {
            if ($array[$i] <= $k) {
                $x[] = $array[$i];
            } elseif ($array[$i] > $k) {
                $y[] = $array[$i];
            }
        }
        $x = quick($x);
        $y = quick($y);
        return array_merge($x, array($k), $y);
    } else {
        return $array;
    }
}

function quickly($array) {
    if (count($array)) {
        $k = $array[0];
        $x = [];
        $y = [];
        $num = count($array);

        for ($i = 1; $i < $num; $i++) {
            if ($array[$i] <= $k) {
                $x[] = $array[$i];
            } elseif ($array[$i] > $num) {
                $y[] = $array[$i];
            }
        }

        $x = quickly($x);
        $y = quickly($y);
        return array_merge($x, array($k), $y);
    } else {
        return $array;
    }
}

var_dump(quick([1,3,2,5,4,11,33,9]));
/**
 * 输出：array(8) {
                    [0]=>
                    int(1)
                    [1]=>
                    int(2)
                    [2]=>
                    int(3)
                    [3]=>
                    int(4)
                    [4]=>
                    int(5)
                    [5]=>
                    int(9)
                    [6]=>
                    int(11)
                    [7]=>
                    int(33)
                    }
 */