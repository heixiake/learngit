<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ll_article_categories".
 *
 * @property integer $id
 * @property string $name
 * @property string $alias
 * @property string $description
 * @property integer $parentid
 * @property integer $state
 * @property string $access
 * @property string $language
 * @property string $theme
 * @property integer $ordering
 * @property string $image
 * @property string $image_caption
 * @property string $image_credits
 * @property string $params
 * @property string $metadesc
 * @property string $metakey
 * @property string $robots
 * @property string $author
 * @property string $copyright
 */
class ArticleCategories extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'll_article_categories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'alias', 'access', 'language'], 'required'],
            [['description', 'image', 'params', 'metadesc', 'metakey'], 'string'],
            [['parentid', 'state', 'ordering'], 'integer'],
            [['name', 'alias', 'image_caption', 'image_credits'], 'string', 'max' => 255],
            [['access'], 'string', 'max' => 64],
            [['language'], 'string', 'max' => 7],
            [['theme'], 'string', 'max' => 12],
            [['robots'], 'string', 'max' => 20],
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
            'name' => 'Name',
            'alias' => 'Alias',
            'description' => 'Description',
            'parentid' => 'Parentid',
            'state' => 'State',
            'access' => 'Access',
            'language' => 'Language',
            'theme' => 'Theme',
            'ordering' => 'Ordering',
            'image' => 'Image',
            'image_caption' => 'Image Caption',
            'image_credits' => 'Image Credits',
            'params' => 'Params',
            'metadesc' => 'Metadesc',
            'metakey' => 'Metakey',
            'robots' => 'Robots',
            'author' => 'Author',
            'copyright' => 'Copyright',
        ];
    }
}
