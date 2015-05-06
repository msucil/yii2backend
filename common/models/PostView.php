<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "post_view".
 *
 * @property integer $post_view_count
 * @property integer $post_id
 * @property string $view_date
 */
class PostView extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post_view';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['post_view_count', 'post_id'], 'integer'],
            [['post_id', 'view_date'], 'required'],
            [['view_date'], 'safe'],
            [['view_date'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'post_view_count' => Yii::t('app', 'Post View Count'),
            'post_id' => Yii::t('app', 'Post ID'),
            'view_date' => Yii::t('app', 'View Date'),
        ];
    }
}
