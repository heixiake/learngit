<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 15/11/10
 * Time: 下午10:50
 */
namespace phpunit\controllers;

use common\models\User;
use yii\caching\FileDependency;
use yii\web\Controller;

class TestController extends Controller
{

    public function behaviors()
    {
        echo '111';
        return [
            'class'=>'yii\filters\PageCache'
        ];
    }

    public function actionIndex()
    {
        echo '22';
        echo $this->renderPartial('index');
        echo "hello";
//        $cache = \Yii::$app->cache;
//
//        $depency = new FileDependency(['fileName'=>'ll.txt']);
//
//        $cache->add('file_keysss',"hell dependencysss",300,$depency);
//        var_dump($cache->get('file_keysss'));
//        $cache->add('name','zly');
//        $cache->set('name','zly2222');
//        $cache->delete('name');
//        echo "name:".$cache->get('name');

//        \Yii::$classMap['common\models\User'] = 'dfd.php';
//        $user = new User();
//        var_dump($user);
//        echo "Test index";
//        var_dump(\Yii::$classMap);
//        echo \Yii::$classMap['common\models\User'];
    }

}
