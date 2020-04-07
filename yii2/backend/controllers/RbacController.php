<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 17/07/2017
 * Time: 8:13 PM
 */

namespace backend\controllers;


use yii\web\Controller;

class RbacController extends Controller
{

    public function actionInit()
    {
        $auth = \Yii::$app->authManager;

        $blogIndex = $auth->createPermission('/blog/index');
        $blogIndex->description='博客列表';
        $auth->add($blogIndex);

        $blogManage = $auth->createRole('博客管理');
        $auth->add($blogManage);
        $auth->addChild($blogManage,$blogIndex);

        $auth->assign($blogManage,1);

    }

    public function actionInit2()
    {
        $auth = \Yii::$app->authManager;

        $blogView = $auth->createPermission('/blog/view');
        $auth->add($blogView);
        $blogCreate = $auth->createPermission('/blog/create');
        $auth->add($blogCreate);
        $blogUpdate = $auth->createPermission('/blog/update');
        $auth->add($blogUpdate);
        $blogDelete = $auth->createPermission('/blog/delete');
        $auth->add($blogDelete);


        $blogManage = $auth->getRole('博客管理');
        $auth->addChild($blogManage,$blogView);
        $auth->addChild($blogManage,$blogCreate);
        $auth->addChild($blogManage,$blogUpdate);
        $auth->addChild($blogManage,$blogDelete);


    }

}