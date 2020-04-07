<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "ll_country".
 *
 * @property string $code
 * @property string $name
 * @property integer $population
 */
class Country_Old extends \yii\db\ActiveRecord
{
    const SCENARIO_LOGIN = 'login';
    const SCENARIO_REGISTER = 'register';

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'll_country';
    }


    public function scenarios()
    {
        return [
            self::SCENARIO_LOGIN =>  ['!code', 'name'],
            self::SCENARIO_REGISTER => ['code', 'name', 'population']
        ];
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [[ 'code','name'], 'required'],
            [['population'], 'integer'],
            [['code'], 'string', 'max' => 2],
            [['name'], 'string', 'max' => 52],
        ];
    }



    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'code' => 'Code',
            'name' => 'Name',
            'population' => 'Population',
        ];
    }

    public function fields()
    {
        return [
            'code',
            'Full'=>'name',
            'population'
        ];
    }

    public function extraFields()
    {
        return [
            'firstname'=>'name'
        ];
    }


}
