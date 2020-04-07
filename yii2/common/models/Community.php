<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "community".
 *
 * @property integer $id
 * @property integer $provincecode
 * @property integer $citycode
 * @property integer $countycode
 * @property integer $towncode
 * @property integer $villagecode
 * @property string $name
 * @property string $longitude
 * @property string $latitude
 * @property integer $user_count
 * @property integer $life_type
 * @property integer $is_open
 * @property integer $status
 */
class Community extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'community';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'provincecode', 'citycode', 'countycode', 'towncode', 'villagecode', 'user_count', 'life_type', 'is_open', 'status'], 'integer'],
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
            'id' => 'ID',
            'provincecode' => 'Provincecode',
            'citycode' => 'Citycode',
            'countycode' => 'Countycode',
            'towncode' => 'Towncode',
            'villagecode' => 'Villagecode',
            'name' => 'Name',
            'longitude' => 'Longitude',
            'latitude' => 'Latitude',
            'user_count' => 'User Count',
            'life_type' => 'Life Type',
            'is_open' => 'Is Open',
            'status' => 'Status',
        ];
    }
}
