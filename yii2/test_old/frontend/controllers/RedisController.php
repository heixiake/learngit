<?php

namespace frontend\controllers;

use Faker\Factory;
use yii\helpers\VarDumper;
use yii\web\Controller;

/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 15/11/6
 * Time: 上午11:42
 */


class RedisController extends Controller
{

    public function actionR()
    {
//        echo 'ddd';

        $redis = \Yii::$app->redis;
        VarDumper::dump($redis, 10, true);
        $redis->set('age',10);
        echo $redis->get('age');
    }
    public function actionIndex()
    {
        echo "index";
//        $this->layout = null;
//        $redis = \Yii::$app->redis;
//        var_dump($redis->open());
//
//        $name =  $redis->get('*');
//        echo $name;
//        echo $this->id;
//        echo $this->action->id;
    }

    public function actionInituser()
    {
//        echo "adduser";

        $redis = \Yii::$app->redis;
        var_dump($redis);





        die;
        //添加用户

       /* for($i=0;$i<100000;$i++){
            $redis->lpush("user:$i",$fake->email);
            echo $fake->email."已经录入<br>";
        }*/
        for($i=0;$i<1000;$i++){
            $email = $redis->rpop("user:$i");
            echo $email."已经读出<br>";
        }


    }
}
