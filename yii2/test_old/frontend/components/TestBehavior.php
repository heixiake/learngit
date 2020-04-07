<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 29/06/2017
 * Time: 2:23 PM
 */

namespace frontend\components;


use yii\base\Behavior;

class TestBehavior extends Behavior
{

    public function events()
    {
        return [
            'beforeAction'=>'test'
        ];
    }


    public function test($event)
    {
        echo "controller id:".\Yii::$app->controller->id."<br>";
        echo "Action id:".\Yii::$app->controller->action->id."<br>";
        echo $event->action;
        var_dump($event->action);
    }

}