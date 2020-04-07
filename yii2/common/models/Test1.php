<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "test1".
 *
 * @property integer $id
 * @property integer $qiye
 * @property integer $yudan
 */
class Test1 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'test1';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['qiye', 'yudan'], 'required'],
            [['qiye', 'yudan'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'qiye' => Yii::t('app', 'Qiye'),
            'yudan' => Yii::t('app', 'Yudan'),
        ];
    }
}
