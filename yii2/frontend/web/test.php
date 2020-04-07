<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 2018/6/1
 * Time: 4:44 PM
 */

//$html = "<a href='www.baidu.com' target='_blank'>我是一个链接</a>";
//echo $html;
//echo htmlentities($html);
//echo htmlspecialchars($html);

function add($a, $b)
{
    $div = 1 / 0;
    return $a + $b;
}

function sum($values)
{
    $sum = 0;
    foreach ($values as $value) {
        $sum = add($sum, $value);
    }
    return $sum;
}

$five = add(2, 3);
$ten = add(add(2, 3), 5);

$hundred = sum(array(10, 20, 30, 40));
$thousand = sum(array(100, 200, 300, 400));