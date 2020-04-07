<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 25/06/2017
 * Time: 10:49 PM
 */

namespace frontend\controllers;


use frontend\models\DeliveryForm;
use yii\web\Controller;

class ValidationController extends Controller
{


    public function actionIndex()
    {
        $model = new DeliveryForm();
        if ($model->load(\Yii::$app->request->post()) && $model->validate()){
            \Yii::$app->session->setFlash('success','The form was successfully processed!');
        }

        return $this->render('index',[
            'model'=>$model
        ]);

    }
}