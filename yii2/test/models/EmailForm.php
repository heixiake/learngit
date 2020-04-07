<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 25/06/2017
 * Time: 10:19 AM
 */

namespace frontend\models;


use yii\base\Model;
use yii\captcha\Captcha;

class EmailForm extends Model
{
    public $from;
    public $to;
    public $email;
    public $verifyCode;


    public function rules()
    {
        return [
            [['from','to'],'number','integerOnly'=>true],
            ['from','compare','compareAttribute'=>'to','operator'=>'<='],
            ['email','email'],
            ['verifyCode', 'captcha','skipOnEmpty'=>!Captcha::checkRequirements(),'captchaAction'=>'test/captcha']
        ];
    }


}