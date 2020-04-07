<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "join".
 *
 * @property integer $id
 * @property integer $type
 * @property string $community_name
 * @property string $community_address
 * @property integer $build_config_ad
 * @property string $community_user
 * @property integer $tel
 * @property integer $created_at
 * @property integer $updated_at
 */
class Join extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'join';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type', 'build_config_ad', 'tel', 'created_at', 'updated_at'], 'integer'],
            [['community_name', 'community_user'], 'string', 'max' => 10],
            [['community_address'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Type',
            'community_name' => 'Community Name',
            'community_address' => 'Community Address',
            'build_config_ad' => 'Build Config Ad',
            'community_user' => 'Community User',
            'tel' => 'Tel',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
