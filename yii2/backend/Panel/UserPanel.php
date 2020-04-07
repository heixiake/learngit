<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 11/06/2017
 * Time: 12:26 AM
 */

namespace backend\Panel;


use Yii;
use yii\debug\Panel;

class UserPanel extends Panel
{

    public function getName()
    {
        return "User";
    }

    public function getSummary()
    {
        return Yii::$app->view->render('@backend/panel/views/summary', ['panel'=>$this]);
    }

    public function getDetail()
    {
        return Yii::$app->view->render('@backend/panel/views/detail', ['panel'=>$this]);
    }

    public function save()
    {
        $user = Yii::$app->user;

        return !$user->isGuest ? [
            'id'=>$user->id,
            'username'=> $user->identity->username,
        ] : null;
    }


}