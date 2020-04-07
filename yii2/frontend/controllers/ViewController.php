<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 11/06/2017
 * Time: 10:12 PM
 */

namespace frontend\controllers;


use yii\web\Controller;

class ViewController extends Controller
{

    public $pageTitle;

    public function actionIndex()
    {
        $this->pageTitle = 'Controller context test';

        return $this->render('index');

    }

    public function hello()
    {
        if (!empty($_GET['name'])) {
            echo 'Hello, '.$_GET['name']. '!';
        }
    }
}