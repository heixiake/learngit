<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property integer $provincecode
 * @property integer $citycode
 * @property integer $countycode
 * @property integer $build_id
 * @property string $pic
 * @property string $title
 * @property integer $price
 * @property integer $ad_id
 * @property integer $is_show
 * @property string $content
 * @property integer $author_id
 * @property integer $created_at
 * @property integer $updated_at
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['provincecode', 'citycode', 'countycode', 'build_id', 'price', 'ad_id', 'is_show', 'author_id', 'created_at', 'updated_at'], 'integer'],
            [['content'], 'string'],
            [['pic'], 'string', 'max' => 500],
            [['title'], 'string', 'max' => 10],
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
            'build_id' => 'Build ID',
            'pic' => 'Pic',
            'title' => 'Title',
            'price' => 'Price',
            'ad_id' => 'Ad ID',
            'is_show' => 'Is Show',
            'content' => 'Content',
            'author_id' => 'Author ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
