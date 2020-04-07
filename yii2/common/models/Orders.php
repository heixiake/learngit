<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property integer $id
 * @property integer $order_num
 * @property integer $type
 * @property integer $product_id
 * @property integer $product_num
 * @property integer $tel
 * @property integer $price
 * @property integer $user_id
 * @property string $province
 * @property string $city
 * @property string $county
 * @property string $result
 * @property string $company
 * @property string $note
 * @property integer $person_num
 * @property integer $is_store
 * @property string $product
 * @property integer $provincecode
 * @property integer $citycode
 * @property integer $countycode
 * @property integer $created_at
 * @property integer $updated_at
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_num', 'type', 'product_id', 'product_num', 'tel', 'price', 'user_id', 'person_num', 'is_store', 'provincecode', 'citycode', 'countycode', 'created_at', 'updated_at'], 'integer'],
            [['province', 'city'], 'string', 'max' => 5],
            [['county', 'company', 'product'], 'string', 'max' => 10],
            [['result'], 'string', 'max' => 50],
            [['note'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'order_num' => 'Order Num',
            'type' => 'Type',
            'product_id' => 'Product ID',
            'product_num' => 'Product Num',
            'tel' => 'Tel',
            'price' => 'Price',
            'user_id' => 'User ID',
            'province' => 'Province',
            'city' => 'City',
            'county' => 'County',
            'result' => 'Result',
            'company' => 'Company',
            'note' => 'Note',
            'person_num' => 'Person Num',
            'is_store' => 'Is Store',
            'product' => 'Product',
            'provincecode' => 'Provincecode',
            'citycode' => 'Citycode',
            'countycode' => 'Countycode',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
