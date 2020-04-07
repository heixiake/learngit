<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ouser".
 *
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $phone
 */
class Ouser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ouser';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'phone'], 'required'],
            [['first_name', 'last_name', 'phone'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'phone' => 'Phone',
        ];
    }
}
