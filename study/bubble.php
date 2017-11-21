<?php
/**
 * Created by PhpStorm.
 * User: hyy
 * Date: 2017/11/16
 * Time: 14:45
 */

function bubble_increment($array){
    $num = count($array);
    if ($num <= 0) {
        return false;
    }

    for($i=0; $i<$num; $i++){
        for($j=$num-1; $j>$i; $j--){
            if ($array[$j] < $array[$j-1]){
                $tmp = $array[$j];
                $array[$j] = $array[$j-1];
                $array[$j-1] = $tmp;
            }
        }
    }
    return $array;
}

function bubble($array)
{
    $num = count($array);
    if ($num <= 0) {
        return false;
    }

    for ($i = 0; $i < $num; $i++) {
        for ($j = $num - 1; $j > $i; $j--) {
            if ($array[$j] > $array[$j - 1]) {
                $tmp = $array[$j - 1];
                $array[$j - 1] = $array[$j];
                $array[$j] = $tmp;
            }
        }
    }

    return $array;
}

var_dump(bubble([2,1,5,6,7,23,11]));
//此时输出：
// array(7) {
//     [0]=>
//   int(23)
//   [1]=>
//   int(11)
//   [2]=>
//   int(7)
//   [3]=>
//   int(6)
//   [4]=>
//   int(5)
//   [5]=>
//   int(2)
//   [6]=>
//   int(1)
// }


var_dump(bubble_increment([2,1,5,6,7,23,11]));

// 此时输出：
// array(7) {
//     [0]=>
//   int(1)
//   [1]=>
//   int(2)
//   [2]=>
//   int(5)
//   [3]=>
//   int(6)
//   [4]=>
//   int(7)
//   [5]=>
//   int(11)
//   [6]=>
//   int(23)
// }
