<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 10/06/2017
 * Time: 11:57 PM
 */

namespace backend\controllers;


use yii\web\Controller;

class LogController extends Controller
{

    public function actionIndex()
    {
        return "Hello, ". $_GET['username'];
        
    }
}