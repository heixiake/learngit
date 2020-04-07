<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 25/06/2017
 * Time: 9:47 AM
 */

namespace frontend\controllers;


use frontend\components\WordValidator;
use yii\helpers\Html;
use yii\validators\Validator;
use yii\web\Controller;

class AdhocValidationController extends Controller
{

    private function getLongTitle()
    {
        return 'here is a very long content for current article,' . 'it should be less then ten words';
    }

    private function getShortTitle()
    {
        return 'There is a shot title';
    }


    private function renderContentByTitle($title)
    {
        $validator = new WordValidator([
            'size' => 5
        ]);

        if ($validator->validate($title, $error)) {
            $content = Html::tag('div', '通过', [
                'class' => 'alert alert-success'
            ]);
        } else {
            $content = Html::tag('div', $error, [
                'class' => 'alert alert-danger'
            ]);
        }

//        if ($validator->validate($title, $error)) {
//            $content = Html::tag('div', 'Value is valid.', ['class' => 'alert alert-success',]);
//        } else {
//            $content = Html::tag('div', $error, ['class' => 'alert alert-danger',]);
//        }


        return $this->renderContent($content);
    }

    public function actionSuccess()
    {
        $title = $this->getShortTitle();
        return $this->renderContentByTitle($title);
    }

    public function actionFailure()
    {
        $title = $this->getLongTitle();
        return $this->renderContentByTitle($title);
    }
}