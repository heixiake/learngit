<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ll_customer".
 *
 * @property integer $cus_id
 * @property string $cus_name
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'll_customer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cus_name'], 'required'],
            [['cus_name'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cus_id' => 'Cus ID',
            'cus_name' => 'Cus Name',
        ];
    }
}
