<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 25/06/2017
 * Time: 9:29 AM
 */

namespace frontend\components;


use yii\validators\Validator;

class WordValidator extends Validator
{
    public $size=50;

    protected function validateValue($value)
    {
        if (str_word_count($value) > $this->size){
            return ['字符的个数应小于{size}',['size'=>$this->size]];
        }
        return false;
    }
}