<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 10/04/2017
 * Time: 11:29 AM
 */

namespace frontend\controllers\admin;


use yii\web\Controller;

class PostCommentController extends Controller
{
//    public $layout='index-test';
//    public $defaultAction='index-test';
    public $sname = 'hello';
    public function actionIndexTest()
    {
        echo "admin/post-comment/index-test----name:$this->sname;<br>";
        echo \Yii::$app->controller->id;
    }

}