<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 10/04/2017
 * Time: 11:45 AM
 */

namespace frontend\components;


use yii\base\Action;

class HelloWorldAction extends Action
{
    public function run()
    {
        echo "this is hello world action";
    }
}