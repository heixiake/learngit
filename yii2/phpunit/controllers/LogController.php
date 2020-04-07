<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 15/11/19
 * Time: 下午10:04
 */

namespace phpunit\controllers;

use yii\web\Controller;

class LogController extends Controller
{

    public function actionIndex()
    {
        echo $this->id;
    }
}