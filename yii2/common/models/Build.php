<?php

namespace common\models;

use frontend\models\query\BuildQuery;
use Yii;

/**
 * This is the model class for table "build".
 *
 * @property integer $id
 * @property integer $provincecode
 * @property integer $citycode
 * @property integer $countycode
 * @property integer $towncode
 * @property integer $community_id
 * @property string $community_name
 * @property string $pic1
 * @property string $pic2
 * @property string $pic3
 * @property integer $sort
 * @property integer $pepole
 * @property integer $area
 * @property integer $unit
 * @property integer $family
 * @property string $level_id
 * @property string $ad_ids
 * @property string $label_ids
 * @property string $content
 * @property integer $author_id
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Build extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'build';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['provincecode', 'citycode', 'countycode', 'towncode', 'community_id', 'sort', 'pepole', 'area', 'unit', 'family', 'author_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['community_id'], 'required'],
            [['content'], 'string'],
            [['community_name'], 'string', 'max' => 50],
            [['pic1', 'pic2', 'pic3'], 'string', 'max' => 100],
            [['level_id', 'ad_ids', 'label_ids'], 'string', 'max' => 30],
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
            'towncode' => 'Towncode',
            'community_id' => 'Community ID',
            'community_name' => 'Community Name',
            'pic1' => 'Pic1',
            'pic2' => 'Pic2',
            'pic3' => 'Pic3',
            'sort' => 'Sort',
            'pepole' => 'Pepole',
            'area' => 'Area',
            'unit' => 'Unit',
            'family' => 'Family',
            'level_id' => 'Level ID',
            'ad_ids' => 'Ad Ids',
            'label_ids' => 'Label Ids',
            'content' => 'Content',
            'author_id' => 'Author ID',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return BuildQuery
     */
    public static function find()
    {
        return new BuildQuery(get_called_class());
    }


}
