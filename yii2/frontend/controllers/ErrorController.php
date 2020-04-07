<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 02/07/2017
 * Time: 10:26 PM
 */

namespace frontend\controllers;


use common\models\Build;
use yii\base\ErrorException;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\ServerErrorHttpException;

class ErrorController extends Controller
{

    public function actionIndex()
    {
//        echo YII_DEBUG;

//        try{
//            10/0;
//        }catch (ErrorException $e){
//            throw new NotFoundHttpException();
//            \Yii::warning('is 0');
//        }
//        $build = Build::find()->where('df=>1')->all();
//        var_dump($build);
        return "Hello:".$_GET['name'];
    }

    public function actionFail()
    {
        throw new ServerErrorHttpException('Error message example.');
    }
}