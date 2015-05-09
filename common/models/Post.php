<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property integer $post_id
 * @property string $post_title
 * @property string $slug
 * @property string $post_content
 * @property integer $status_id
 * @property string $meta_tags
 * @property string $meta_desc
 * @property string $image
 * @property integer $featured_post
 * @property integer $main_page
 * @property string $created_at
 * @property string $updated_at
 * @property integer $user_id
 * @property integer $category_id
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['post_title', 'slug', 'post_content', 'status_id', 'user_id', 'category_id'], 'required'],
            [['post_content'], 'string'],
            [['status_id', 'featured_post', 'main_page', 'user_id', 'category_id'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['post_title', 'slug', 'meta_tags', 'meta_desc'], 'string', 'max' => 250],
            [['image'], 'string', 'max' => 150]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'post_id' => Yii::t('app', 'Post ID'),
            'post_title' => Yii::t('app', 'Post Title'),
            'slug' => Yii::t('app', 'Slug'),
            'post_content' => Yii::t('app', 'Content'),
            'status_id' => Yii::t('app', 'Status'),
            'meta_tags' => Yii::t('app', 'Meta Tags'),
            'meta_desc' => Yii::t('app', 'Meta Desc'),
            'image' => Yii::t('app', 'Image'),
            'featured_post' => Yii::t('app', 'Featured Post'),
            'main_page' => Yii::t('app', 'Main Page'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'user_id' => Yii::t('app', 'User'),
            'category_id' => Yii::t('app', 'Category'),
        ];
    }
}
