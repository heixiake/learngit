<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 14/04/2017
 * Time: 6:28 PM
 */

namespace frontend\components;


use yii\base\Component;

class Mail extends Component
{

    public function __construct($config)
    {
        parent::__construct($config);
    }
    const EVENT_SEND_MAIL = 'send_mail';

    public function sendMail($email,$message)
    {
//        echo "dd";
        $event = new MailEvent();
        $event->email = $email;
        $event->message = $message;
        $this->trigger(self::EVENT_SEND_MAIL, $event);

        echo "发送到email:$email,message:$message<br>";
    }
}