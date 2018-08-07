<?php
/**
 * Created by PhpStorm.
 * User: hyyph
 * Date: 2018/7/26
 * Time: 15:35
 */

function king($n) {
    $monkey = range(1, $n);
    $i = 0;

    while (count($monkey) > 1) {
        $i++;
        $head = array_shift($monkey);
        if ($i % 3 != 0) {
            array_push($monkey, $head);
        }
    }
    return $monkey[0];
}

var_dump(king(100));

function kings($m) {
    for($i = 1;$i < $m + 1;$i++) {
        //构建数组
        $arr[] = $i;
    }
    $i = 0;//设置数组指针
    while (count($arr) > 1) {
        //遍历数组，判断当前猴子是否为出局序号，
        //如果是则出局，否则放到数组最后
        if (($i + 1) % 3 == 0) {
            unset($arr[$i]);
        } else {
            array_push($arr, $arr[$i]);
            //本轮非出局猴子放数组尾部
            unset($arr[$i]);
            //删除
        }
        $i++;
    }
    return $arr;
}
var_dump(kings(100));

function  game($n,$m){
    //模拟建立一个连续数组
    $monkey=range(1,$n);

    $i=0;
    while(count($monkey)>1){
        $i+=1;//开始查数
        //直接一个一个出列最前面的猴子
        $head=array_shift($monkey);
        if($i%$m!=0){
            //如果没数到m或m的倍数,则把该猴放回尾部去
            array_push($monkey,$head);
        }//否则就抛弃掉了
    }
    return $monkey[0];
}

var_dump(game(100,3));
