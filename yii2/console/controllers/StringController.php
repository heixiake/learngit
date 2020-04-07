<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 2018/6/4
 * Time: 11:18 AM
 */

namespace console\controllers;


use yii\console\Controller;
use yii\helpers\Console;
use yii\helpers\VarDumper;

class StringController extends Controller
{

    public function actionIndex()
    {
        //字符串更新、字符串转义、字符串运算、
        //string替换、删除、截取、复制、连接、比较、查找、包含、大小写转换、分割等

        $str = "hello, world\n";
        $email = "zlyjava@126.com";
        $perfort_str = "my name is %s, age is %d\n";


        //字符串处理的分类

        // 1-> 字符大小
        $this->stdout(strlen($str)."\n", Console::BOLD);
        $this->stdout(substr_count($str,'ll')."\n");

        // 2-> 字符串截取
        $this->stdout(substr($str, 0, 2)."\n");
        $this->stdout(strstr($email, '@', true)."\n", Console::BOLD);
        $this->stdout(strstr($email, '@')."\n");
        $this->stdout(strchr($email, '@')."\n");
        $this->stdout(stristr($email, 'Y', true)."\n", Console::BOLD);
        $this->stdout(strpos($email,'@'));
        // 3-> 字符串替换

        // 4-> 字符串比较

        // 5-> 字符串编码及转换
    }
}