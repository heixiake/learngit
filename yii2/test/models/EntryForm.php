<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 12/03/2017
 * Time: 12:19 AM
 */

namespace frontend\models;


use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email']
        ];
    }

}