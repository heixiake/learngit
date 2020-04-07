<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "build_config".
 *
 * @property integer $id
 * @property string $name
 * @property integer $status
 * @property integer $type
 * @property string $icon
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $isdel
 */
class BuildConfig extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'build_config';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['status', 'type', 'created_at', 'updated_at', 'isdel'], 'integer'],
            [['name'], 'string', 'max' => 5],
            [['icon'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'status' => 'Status',
            'type' => 'Type',
            'icon' => 'Icon',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'isdel' => 'Isdel',
        ];
    }
}
