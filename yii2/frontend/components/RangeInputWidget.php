<?php
/**
 * Created by PhpStorm.
 * User: heixiake
 * Date: 25/06/2017
 * Time: 11:10 AM
 */

namespace frontend\components;


use yii\base\Model;
use yii\base\Widget;
use yii\db\Exception;
use yii\helpers\Html;

class RangeInputWidget extends Widget
{
    public $model;
    public $attributeFrom;
    public $attributeTo;
    public $htmlOptions = [];

    protected function hasModel()
    {
        return $this->model instanceof Model && $this->attributeFrom !==null && $this->attributeTo !==null;
    }

    public function run()
    {
        if (!$this->hasModel()){
            throw new Exception('Model must be set');
        }

        return Html::activeTextInput($this->model, $this->attributeFrom, $this->htmlOptions).'->'. Html::activeTextInput($this->model, $this->attributeTo, $this->htmlOptions);
    }


}