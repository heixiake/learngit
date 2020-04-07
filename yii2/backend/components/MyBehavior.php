<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 17/07/2017
 * Time: 8:28 PM
 */

namespace backend\components;

use yii\base\ActionFilter;

class MyBehavior extends ActionFilter
{


    public function beforeAction($action)
    {
        var_dump(111);
        return true;
    }

    public function isGuest()
    {
        return \Yii::$app->user->isGuest;
    }
}