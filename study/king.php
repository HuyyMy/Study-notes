<?php
/**
 * Created by PhpStorm.
 * User: hyy
 * Date: 2017/11/15
 * Time: 14:40
 */
phpinfo();
// 方案一，使用php来模拟这个过程
function king($n){
    $monkey = range(1, $n);
    $i = 0;

    while (count($monkey) >1) {
        $i += 1;
        $head = array_shift($monkey);//一个个出列最前面的猴子
        if ($i % 3 !=0) {
            #如果不是m的倍数，则把猴子返回尾部，否则就抛掉，也就是出列
            array_push($monkey,$head);
        }

        // 剩下的最后一个就是大王了
        return $monkey[0];
        }
    }
    // 测试
    echo king(10);

function monkey($n)
{
    $monkey = range(1, $n);
    $i = 0;

    while (count($monkey) > 1) {
        $i += 1;
        $head = array_shift($monkey); //弹出前面猴子

        if ($i % 3 != 0) {
            array_push($monkey, $head);
        }

        return $monkey[0];
    }
}

echo monkey(4);
