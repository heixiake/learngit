<?php
namespace phpunit\controlles;

use Faker\Factory;
use yii\web\Controller;

/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 15/11/6
 * Time: 上午11:42
 */


class RedisController extends Controller
{
    public function actionIndex()
    {
        echo $this->id;
        echo $this->action->id;
    }

    public function actionInituser()
    {
//        echo "adduser";
        $fake = Factory::create('zh_CN');

        $redis = \Yii::$app->redis;

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
