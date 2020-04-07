<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ll_article".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 */
class Article extends \yii\db\ActiveRecord
{

    const EVENT_OUR_CUSTOME_EVENT = 'eventOurCustomeEvent';

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'll_article';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['name'], 'string', 'max' => 255],
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
            'description' => 'Description',
        ];
    }
}
