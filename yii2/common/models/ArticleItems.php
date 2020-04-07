<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ll_article_items".
 *
 * @property integer $id
 * @property string $title
 * @property string $alias
 * @property integer $catid
 * @property integer $userid
 * @property string $introtext
 * @property string $fulltext
 * @property integer $state
 * @property string $access
 * @property string $language
 * @property string $theme
 * @property integer $ordering
 * @property integer $hits
 * @property string $image
 * @property string $image_caption
 * @property string $image_credits
 * @property string $video
 * @property string $video_type
 * @property string $video_caption
 * @property string $video_credits
 * @property string $created
 * @property integer $created_by
 * @property string $modified
 * @property integer $modified_by
 * @property string $params
 * @property string $metadesc
 * @property string $metakey
 * @property string $robots
 * @property string $author
 * @property string $copyright
 */
class ArticleItems extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'll_article_items';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'alias', 'access', 'language'], 'required'],
            [['catid', 'userid', 'state', 'ordering', 'hits', 'created_by', 'modified_by'], 'integer'],
            [['introtext', 'fulltext', 'image', 'video', 'params', 'metadesc', 'metakey'], 'string'],
            [['created', 'modified'], 'safe'],
            [['title', 'alias', 'image_caption', 'image_credits', 'video_caption', 'video_credits'], 'string', 'max' => 255],
            [['access'], 'string', 'max' => 64],
            [['language'], 'string', 'max' => 7],
            [['theme'], 'string', 'max' => 12],
            [['video_type', 'robots'], 'string', 'max' => 20],
            [['author', 'copyright'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'alias' => 'Alias',
            'catid' => 'Catid',
            'userid' => 'Userid',
            'introtext' => 'Introtext',
            'fulltext' => 'Fulltext',
            'state' => 'State',
            'access' => 'Access',
            'language' => 'Language',
            'theme' => 'Theme',
            'ordering' => 'Ordering',
            'hits' => 'Hits',
            'image' => 'Image',
            'image_caption' => 'Image Caption',
            'image_credits' => 'Image Credits',
            'video' => 'Video',
            'video_type' => 'Video Type',
            'video_caption' => 'Video Caption',
            'video_credits' => 'Video Credits',
            'created' => 'Created',
            'created_by' => 'Created By',
            'modified' => 'Modified',
            'modified_by' => 'Modified By',
            'params' => 'Params',
            'metadesc' => 'Metadesc',
            'metakey' => 'Metakey',
            'robots' => 'Robots',
            'author' => 'Author',
            'copyright' => 'Copyright',
        ];
    }
}
