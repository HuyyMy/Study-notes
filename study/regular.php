<?php
/**
 * Created by PhpStorm.
 * User: hyy
 * Date: 2017/11/21
 * Time: 15:50
 */

// *:特殊字符，匹配0个或多个字符

$str = 'aa';
var_dump(preg_match("/a*/",$str, $content));
var_dump($content[0]);
echo '<br>';

// ^ : 以匹配的字符开始

$str = 'adsda';
var_dump(preg_match('/^a/', $str, $content));
var_dump($content[0]);
echo '<br>';

// $ : 已匹配的字符结尾

$str = 'klajsdioasdhn';
var_dump(preg_match('/n$/', $str, $content));
var_dump($content[0]);
echo '<br>';
// * : 匹配*前面的字符 0 次或 n 次

$str = 'dfsboooosboboffff';
var_dump(preg_match('/sbo*/', $str, $content));
var_dump($content[0]);
// 输出：sboooo
echo '<br>';

// + : 匹配+号前面的一次或n次

$str = 'health';

var_dump(preg_match('/h+/', $str, $content));
var_dump($content[0]);
echo '<br>';

// .(小数点) : 匹配除换行符外的所有单个字符；

$str = 'sbdbebhb';

var_dump(preg_match('/.b/', $str, $content));
var_dump($content[0]);
echo '<br>';

// () . : 匹配()内的并记录匹配的值

$str = 'string';

var_dump(preg_match('/(str)/', $str, $content));
var_dump($content[0]);
echo '<br>';

// x|y : 匹配'x'或者'y'

$str = 'this is string';

var_dump(preg_match('/this|str/', $str, $content));
var_dump($content[0]);
echo '<br>';

// {n,} : 至少匹配n个前面的字符。
// {n,m} : 至少匹配n个至多匹配m个前面的字符。
$str = 'I am susususususuperman';
var_dump(preg_match('/(su){2,}/', $str, $content));
var_dump(preg_match('/(su){2,3}/', $str));
var_dump($content);
echo '<br>';

// [] : 一个字符列表，匹配列中出现的任一字符

$str = 'hello, beautiful girl';

var_dump(preg_match('/[sbda]/', $str));
echo '<br>';

// [^a-z] : 匹配除了a-z所有字符

$str = 'hi, boy';
var_dump(preg_match('/[^hiboy]/', $str));
echo '<br>';

// d : 匹配一个数字，等价于[0-9];
$str = '6 is good';
var_dump(preg_match('/d/', $str));
echo '<br>';

// D : 匹配任何的非数字字符， 等价于[^0-9];
$str = '666666s66666';
var_dump(preg_match('/D/', $str));
echo '<br>';

// n :匹配一个换行符；
// r : 匹配一个回车符；
// w : 匹配所有字母，数字，下划线，等价于[A-Za-z0-9_];
// w : 匹配所有字母，数字，下划线，等价于[^A-Za-z0-9_];

// 修正符
// i : 不区分大小写匹配；
// g : 全局匹配；
// m : 将字符串视为多行
// S : 将字符串视为单行
// X : 忽略空白
// A : 强制从目标字符串开头匹配；
// D : 如果使用$限制结尾字符，则不允许结尾有换行
// U : 只匹配最近的一个字符串
