<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "region_village".
 *
 * @property integer $villagecode
 * @property integer $provincecode
 * @property integer $citycode
 * @property integer $countycode
 * @property integer $towncode
 * @property string $name
 * @property integer $is_open
 * @property integer $status
 * @property string $longitude
 * @property string $latitude
 */
class RegionVillage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'region_village';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['villagecode'], 'required'],
            [['villagecode', 'provincecode', 'citycode', 'countycode', 'towncode', 'is_open', 'status'], 'integer'],
            [['longitude', 'latitude'], 'number'],
            [['name'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'villagecode' => 'Villagecode',
            'provincecode' => 'Provincecode',
            'citycode' => 'Citycode',
            'countycode' => 'Countycode',
            'towncode' => 'Towncode',
            'name' => 'Name',
            'is_open' => 'Is Open',
            'status' => 'Status',
            'longitude' => 'Longitude',
            'latitude' => 'Latitude',
        ];
    }
}
