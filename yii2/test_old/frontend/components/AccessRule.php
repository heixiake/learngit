<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 25/03/2017
 * Time: 5:46 PM
 */

namespace frontend\components;

use common\models\User;
class AccessRule extends \yii\filters\AccessRule
{
    protected function matchRole($user)
    {
        if (empty($this->roles))
        {
            return true;
        }
        $isGuset = $user->getIsGuest();

        foreach ($this->roles as $role) {
            switch ($role){
                case '?':
                    return ($isGuset)? true : false;
//                case :
            }
        }
        return parent::matchRole($user); // TODO: Change the autogenerated stub
    }
}