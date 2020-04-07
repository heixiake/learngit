<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ll_article_attachments".
 *
 * @property integer $id
 * @property integer $itemid
 * @property string $filename
 * @property string $title
 * @property string $titleAttribute
 * @property integer $hits
 */
class ArticleAttachments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'll_article_attachments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['itemid', 'filename', 'title'], 'required'],
            [['itemid', 'hits'], 'integer'],
            [['titleAttribute'], 'string'],
            [['filename', 'title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'itemid' => 'Itemid',
            'filename' => 'Filename',
            'title' => 'Title',
            'titleAttribute' => 'Title Attribute',
            'hits' => 'Hits',
        ];
    }
}
