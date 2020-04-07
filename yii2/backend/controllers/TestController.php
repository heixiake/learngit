<?php

namespace backend\controllers;

class TestController extends \backend\component\BaseController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
