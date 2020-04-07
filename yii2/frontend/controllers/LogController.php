<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 02/07/2017
 * Time: 11:46 PM
 */

namespace frontend\controllers;


use common\models\Build;
use yii\web\Controller;

class LogController extends Controller
{

    public function actionIndex()
    {
        \Yii::beginProfile('build1');
        $build= Build::find()->all();
//        var_dump($build);
        echo 'build ';
        \Yii::endProfile('build1');
    }
}