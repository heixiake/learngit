<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "contest_prize_assn".
 *
 * @property integer $id
 * @property integer $contest_id
 * @property integer $prize_id
 */
class ContestPrizeAssn extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contest_prize_assn';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['contest_id', 'prize_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'contest_id' => 'Contest ID',
            'prize_id' => 'Prize ID',
        ];
    }
}
