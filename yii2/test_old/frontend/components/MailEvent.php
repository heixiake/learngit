<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 14/04/2017
 * Time: 6:19 PM
 */

namespace frontend\components;


use yii\base\Event;

class MailEvent extends Event
{
    public $email;
    public $message;
}