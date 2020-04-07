<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 15/10/31
 * Time: 下午9:05
 */
namespace frontend\components;


class MyComponet extends \yii\base\Component
{
    public function age(){
        echo "mycomponet hello";
    }

    public function height()
    {
        $this->age();
    }
}