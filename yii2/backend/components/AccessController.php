<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 17/07/2017
 * Time: 8:54 PM
 */

namespace backend\components;


use yii\base\ActionFilter;
use yii\web\ForbiddenHttpException;

class AccessController extends ActionFilter
{
    public function beforeAction($action)
    {
        $actionId = $action->getUniqueId();
        $actionId = '/'.$actionId;

        $user = \Yii::$app->getUser();
        $userId = $user->id;

        $routes = [];
        $manager = \Yii::$app->getAuthManager();
        foreach ($manager->getPermissionsByUser($userId) as $name=>$value) {
            if ($name[0] === '/'){
                $routes[] = $name;
            }
        }

        if (in_array($actionId, $routes)){
            return true;
        }

        $this->denyAccess($user);
    }

    /**
     * @param $user \yii\web\User
     */
    private function denyAccess($user)
    {
        if ($user->getIsGuest()){
            $user->loginRequired();
        }else{
            throw new ForbiddenHttpException('不允许访问。');
        }
    }


}