<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 10/06/2017
 * Time: 11:05 PM
 */

namespace api\controllers;


use yii\web\Controller;

class TestController extends Controller
{
    public function actionIndex()
    {
        echo "test index";
    }
}