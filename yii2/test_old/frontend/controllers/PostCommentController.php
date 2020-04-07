<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 10/04/2017
 * Time: 11:27 AM
 */

namespace frontend\controllers;


use yii\web\Controller;

class PostCommentController extends Controller
{
    public function actionIndex()
    {
        echo "post-comment-index";
        $posts = [
            [
                'title'=> 'first post',
                'content'=> 'there is an example of reusing views with partials'
            ],
            [
                'title'=>'second post',
                'content'=>'we use twitter widget'
            ]
        ];

        $this->render('index',[
            'posts'=>$posts
        ]);
    }

    public function actionIndexTest()
    {
        echo "index-testi";
    }
}