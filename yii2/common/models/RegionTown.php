<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "region_town".
 *
 * @property integer $towncode
 * @property integer $provincecode
 * @property integer $citycode
 * @property integer $countycode
 * @property string $name
 * @property integer $is_open
 * @property integer $status
 * @property string $longitude
 * @property string $latitude
 */
class RegionTown extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'region_town';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['towncode'], 'required'],
            [['towncode', 'provincecode', 'citycode', 'countycode', 'is_open', 'status'], 'integer'],
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
            'towncode' => 'Towncode',
            'provincecode' => 'Provincecode',
            'citycode' => 'Citycode',
            'countycode' => 'Countycode',
            'name' => 'Name',
            'is_open' => 'Is Open',
            'status' => 'Status',
            'longitude' => 'Longitude',
            'latitude' => 'Latitude',
        ];
    }
}
