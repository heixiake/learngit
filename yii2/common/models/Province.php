<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "province".
 *
 * @property integer $provincecode
 * @property string $name
 * @property integer $is_open
 * @property integer $sort_order
 * @property integer $status
 * @property string $longitude
 * @property string $latitude
 */
class Province extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'province';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['provincecode'], 'required'],
            [['provincecode', 'is_open', 'sort_order', 'status'], 'integer'],
            [['longitude', 'latitude'], 'number'],
            [['name'], 'string', 'max' => 8],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
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
