<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 15/08/2017
 * Time: 10:03 AM
 */

namespace frontend\modules\hello\controllers;


use yii\web\Controller;

class TestController extends  Controller
{
    public function actionIndex()
    {
        echo $this->viewPath."<br>";
//        $this->layout = false;
        echo __FILE__."<br>";
        return $this->renderPartial('/default/index');
    }
}