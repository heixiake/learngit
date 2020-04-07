<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 01/07/2017
 * Time: 8:12 AM
 */

namespace frontend\controllers;


use yii\web\Controller;

class CommunityController extends Controller
{

    public function actionIndex()
    {
        echo \Yii::getAlias('@runtime');
        echo 'community index';
        \Yii::trace('ddd','catelog');
        \Yii::trace('ddd','hello');
    }
}