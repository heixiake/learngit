<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 25/06/2017
 * Time: 9:33 AM
 */

namespace frontend\controllers;


use common\models\Test;
use yii\helpers\Html;
use yii\web\Controller;

class ModelValidationController extends Controller
{

    private function getLongTitle()
    {
        return 'There is a very long content for current article,'.'it should be less then ten words';
    }

    private function getShortTitle()
    {
        return 'There is a shot title';
    }

    private function renderContentByModel($test)
    {
        $model = new Test();
        $model->test = $test;
        if ($model->validate()) {
            $content = Html::tag('div', 'Model is valid.',[
                'class'=>'alert alert-success'
            ]);
        }else{
            $content = Html::errorSummary($model, [
                'class'=>'alert alert-danger'
            ]);
        }

        return $this->renderContent($content);
    }

    public function actionSuccess()
    {
        $test = $this->getShortTitle();
        return $this->renderContentByModel($test);
    }

    public function actionFailure()
    {
        $test = $this->getLongTitle();
        return $this->renderContentByModel($test);
    }
}