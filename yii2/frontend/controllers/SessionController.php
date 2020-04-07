<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 04/07/2017
 * Time: 1:06 PM
 */

namespace frontend\controllers;


use yii\web\Controller;
use yii\web\Cookie;

class SessionController extends Controller
{

    public function actionIndex()
    {
//        $session = \Yii::$app->session;
//        $session['cartlist.{$prodctID}.name']='一种商品';
//        $session['cartlist.{$prodctID}.img']='1.img';
//        $session['cartlist.{$prodctID}.price']=20;
//
//        $session->set('cartlist',)
//        $session->set('name','zly');
//        $session['cartlist']=[
//            ['name'=>'name1',
//            'img'=>'1.img',
//            'price'=>10],
//            ['name'=>'name2',
//                'img'=>'2.img',
//                'price'=>20],
//        ];
        $cookies = \Yii::$app->response->cookies;
        $cookies->add(new Cookie([
            'name'=>'cookie_name',
            'value'=>'cookie_zly'
        ]));
    }

    public function actionList()
    {
        $cookies= \Yii::$app->request->cookies;
        echo $cookies->getValue('cookie_name');
//        echo $n = $cookies->get('cookie_name');
//        echo $n->value;
//        $session= \Yii::$app->session;
//        $session->remove('cartlist');
//        $session->destroy();
//        var_dump($session->get('cartlist'));
//        var_dump($session->get('name'));
//        var_dump($session);
//        foreach ($session as $key =>$value) {
//            var_dump($value);
//        }
    }
}