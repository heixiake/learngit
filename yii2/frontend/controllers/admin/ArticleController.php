<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 10/04/2017
 * Time: 11:18 AM
 */

namespace frontend\controllers\admin;


use yii\web\Controller;

class ArticleController extends Controller
{
    public function actionIndex(){
        echo \Yii::$app->controller->id."<br>";
        echo "admin/article--index";
    }
}