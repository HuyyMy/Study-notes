<?php
/**
 * Created by PhpStorm.
 * User: hyy
 * Date: 2017/11/14
 * Time: 18:01
 */

function test($array)
{
    return ($array & 1);
}

$data = ['q', 'w', 'e', 1, '2', 3, 4, '7'];

print_r(array_filter($data, 'test'));
// 此时输出：Array ( [3] => 1 [5] => 3 [7] => 7 );

$param = ['q', 'w', 'e', 1, '2', 3, 4, '7', '', 0, null];

print_r(array_filter($param));
//此时输出：Array ( [0] => q [1] => w [2] => e [3] => 1 [4] => 2 [5] => 3 [6] => 4 [7] => 7 );

/**
 * array_filter():
 * 依次将 array 数组中的每个值传递到 callback 函数。如果 callback 函数返回 true，
 * 则 array 数组的当前值会被包含在返回的结果数组中。数组的键名保留不变。
 *
 **/
