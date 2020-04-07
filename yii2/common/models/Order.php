<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $address
 * @property integer $product_id
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'product_id'], 'integer'],
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
            'user_id' => 'User ID',
            'address' => 'Address',
            'product_id' => 'Product ID',
        ];
    }

    public function getUser()
    {
        return $this->hasOne(Ouser::className(),['id'=>'user_id']);
    }


    public function getProduct()
    {
        return $this->hasOne(Oproduct::className(),['id'=>'product_id']);
    }


}
