<?php
/**
 * Created by PhpStorm.
 * User: hyy
 * Date: 2017/9/29
 * Time: 14:17
 */

function getFunc()
{
    print_r(func_get_args());
    echo '<br>';
    echo func_get_arg(1);
    echo '<br>';
    echo func_num_args();
}

getFunc('name','sex','age');

/**
 * 以上会输出：
 * Array ( [0] => name [1] => sex [2] => age )
    sex
    3
 * 可见：
 * func_get_args()：返回的是包含当前函数所有参数的一个数组
 * func_get_arg():  返回指定键的值
 * fun_num_args():  返回的是当前函数参数的数量
 *
 */
