<?php


namespace api\controllers;


use common\models\User;
use yii\data\ActiveDataProvider;
use yii\rest\ActiveController;

class UserController extends ActiveController
{
    public $modelClass = 'common\models\User';

    public function actionIndex()
    {
        return new ActiveDataProvider([
            'query' => User::find(),
        ]);
    }
}




//namespace app\controllers;
//
//use yii\rest\Controller;
//use yii\data\ActiveDataProvider;
//use app\models\Post;
//
//class PostController extends Controller
//{
//    public function actionIndex()
//    {
//        return new ActiveDataProvider([
//            'query' => Post::find(),
//        ]);
//    }
//}