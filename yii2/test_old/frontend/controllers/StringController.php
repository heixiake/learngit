<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 2018/6/4
 * Time: 11:18 AM
 */

namespace frontend\controllers;


use yii\web\Controller;

class StringController extends Controller
{

    public function actionIndex()
    {
        $str = "hello, world\n";
        $perfort_str = "my name is %s, age is %d\n";

        //字符串处理的分类

        // 1-> 字符大小
        echo strlen($str);
        // 2-> 字符串截取

        // 3-> 字符串替换

        // 4-> 字符串比较

        // 5-> 字符串转换
    }
}