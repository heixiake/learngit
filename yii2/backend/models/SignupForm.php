<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 17/07/2017
 * Time: 2:53 PM
 */

namespace backend\models;


use function Funct\false;
use function Funct\null;
use yii\base\Model;

class SignupForm extends Model
{

    public $username;
    public $email;
    public $password;

    public $created_at;
    public $updated_at;


    public function rules()
    {

        return [
            ['username','filter','filter'=>'trim'],
            ['username', 'required', 'message'=>'用户名不能为空'],
            ['username','unique','targetClass'=>UserBackend::className(),'message'=>'用户名已存在'],
//            ['username','string','min'=>2,'max'=>255],

            ['email','filter','filter'=>'trim'],
            ['email','required','message'=>'邮箱不可能为空'],
            ['email','email'],
            ['email','unique','targetClass'=>UserBackend::className(),'message'=>'email存在'],

            ['password','required','message'=>'密码不能为空'],
//            ['password','string','min'=>6,'tooShort'>'密码至少为6位'],

            [['created_at','updated_at'],'default','value'=>date('Y-m-d H:i:s')]

        ];

    }

    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }


        $user = new UserBackend();

        $user->username = $this->username;
        $user->email = $this->email;
        $user->created_at = $this->created_at;
        $user->updated_at = $this->updated_at;

        $user->setPassword($this->password);
        $user->generateAuthKey();


        return $user->save(false);

    }

}


?>