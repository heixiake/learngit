<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 26/07/2017
 * Time: 11:59 AM
 */

namespace frontend\components;


use yii\web\Response;

class CaptchaAction extends \yii\captcha\CaptchaAction
{

    /**
     * 默认验证码刷新页面不会自动刷新
     */
    public function run()
    {
        $this->setHttpHeaders();
        \Yii::$app->response->format = Response::FORMAT_RAW;
        return $this->renderImage($this->getVerifyCode(true));
    }
}