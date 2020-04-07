<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 10/06/2017
 * Time: 11:51 PM
 */

namespace backend\controllers;


use common\models\Article;
use yii\web\Controller;

class ErrorController extends Controller
{

    public function actionIndex()
    {
        $article = $this->findModel('aaa');
        return $article->id;
    }

    private function findModel($string)
    {
        return Article::findOne(['names' => $string]);
    }

}