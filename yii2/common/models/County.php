<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "county".
 *
 * @property integer $countycode
 * @property integer $provincecode
 * @property integer $citycode
 * @property string $name
 * @property integer $is_open
 * @property integer $sort_order
 * @property integer $status
 * @property string $longitude
 * @property string $latitude
 */
class County extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'county';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['countycode'], 'required'],
            [['countycode', 'provincecode', 'citycode', 'is_open', 'sort_order', 'status'], 'integer'],
            [['longitude', 'latitude'], 'number'],
            [['name'], 'string', 'max' => 16],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'countycode' => 'Countycode',
            'provincecode' => 'Provincecode',
            'citycode' => 'Citycode',
            'name' => 'Name',
            'is_open' => 'Is Open',
            'sort_order' => 'Sort Order',
            'status' => 'Status',
            'longitude' => 'Longitude',
            'latitude' => 'Latitude',
        ];
    }
}
