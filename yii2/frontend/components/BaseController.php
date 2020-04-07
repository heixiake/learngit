<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 11/06/2017
 * Time: 4:07 PM
 */

namespace frontend\components;


use yii\filters\AccessControl;
use yii\web\Controller;

class BaseController extends Controller
{
    public function actions()
    {

        return [

            'error' => ['class' => 'yii\web\ErrorAction'],

        ];
    }

    public function behaviors()
    {

        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    ['allow' => true, 'actions' => 'error'],
                    [
                        'allow' => true,
                        'roles' => ['@'],

                    ],

                ],

            ]

        ];

    }
}