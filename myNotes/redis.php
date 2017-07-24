<?php
/**
 * Created by PhpStorm.
 * User: hyy
 * Date: 2017/7/24
 * Time: 14:13
 */

$redis = new Redis();
$redis->connect('127.0.0.1',6379);
$redis->set('redis','hello redis');
echo $redis->get('redis');
