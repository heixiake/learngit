<?php

namespace common\models;

use frontend\components\WordValidator;
use function Funct\true;
use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\SluggableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "test".
 *
 * @property integer $id
 * @property string $test
 * @property string $balance
 */
class Test extends \yii\db\ActiveRecord
{
    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => TimestampBehavior::className(),
            ],
            'blamestamp' => [
                'class' => BlameableBehavior::className(),
                'createdByAttribute' => 'author_id',
                'updatedByAttribute' => 'updater_id',
            ],
            'slug'=>[
                'class' => SluggableBehavior::className(),
                'attribute'=>'test',
                'slugAttribute'=>'slug',
                'immutable'=>false,
                'ensureUnique'=>true

            ]
        ];
    }


    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'test';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['test'], 'string'],
            ['test',WordValidator::className(),'size'=>5],
            ['balance','number','min'=>20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'test' => 'Test',
        ];
    }

    public function beforeSave($insert)
    {
        $this->test = preg_replace('~((?:https?|ftps?)://.*?)( |$)~iu',
            '<a href="\1">\1</a>\2', $this->test);

        return parent::beforeSave($insert);
    }


}
