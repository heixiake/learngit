<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "test2".
 *
 * @property integer $id
 * @property string $zt
 * @property string $jiaqian
 * @property integer $qiye
 * @property string $qingdan
 * @property integer $yudan
 */
class Test2 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'test2';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['zt', 'jiaqian', 'qiye', 'qingdan', 'yudan'], 'required'],
            [['qiye', 'yudan'], 'integer'],
            [['zt', 'jiaqian', 'qingdan'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'zt' => Yii::t('app', 'Zt'),
            'jiaqian' => Yii::t('app', 'Jiaqian'),
            'qiye' => Yii::t('app', 'Qiye'),
            'qingdan' => Yii::t('app', 'Qingdan'),
            'yudan' => Yii::t('app', 'Yudan'),
        ];
    }
}
