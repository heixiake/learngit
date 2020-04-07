<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "city".
 *
 * @property integer $citycode
 * @property integer $provincecode
 * @property string $name
 * @property integer $is_open
 * @property integer $sort_order
 * @property integer $status
 * @property string $longitude
 * @property string $latitude
 */
class City extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'city';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['citycode'], 'required'],
            [['citycode', 'provincecode', 'is_open', 'sort_order', 'status'], 'integer'],
            [['longitude', 'latitude'], 'number'],
            [['name'], 'string', 'max' => 12],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'citycode' => 'Citycode',
            'provincecode' => 'Provincecode',
            'name' => 'Name',
            'is_open' => 'Is Open',
            'sort_order' => 'Sort Order',
            'status' => 'Status',
            'longitude' => 'Longitude',
            'latitude' => 'Latitude',
        ];
    }
}
