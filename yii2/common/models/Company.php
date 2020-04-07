<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "company".
 *
 * @property integer $id
 * @property string $name
 * @property integer $type
 * @property string $tel
 * @property string $address
 * @property string $user_name
 * @property integer $user_tel
 * @property integer $created_at
 * @property integer $updated_at
 */
class Company extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'company';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type', 'user_tel', 'created_at', 'updated_at'], 'integer'],
            [['name', 'user_name'], 'string', 'max' => 50],
            [['tel'], 'string', 'max' => 10],
            [['address'], 'string', 'max' => 100],
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
            'type' => 'Type',
            'tel' => 'Tel',
            'address' => 'Address',
            'user_name' => 'User Name',
            'user_tel' => 'User Tel',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
