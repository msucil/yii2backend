<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property integer $category_id
 * @property string $category_name
 * @property string $category_desc
 * @property integer $category_type_id
 * @property integer $parent_category
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_name', 'category_type_id'], 'required'],
            [['category_type_id', 'parent_category'], 'integer'],
            [['category_name', 'category_desc'], 'string', 'max' => 250],
            [['category_name'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'category_id' => Yii::t('app', 'Category ID'),
            'category_name' => Yii::t('app', 'Category Name'),
            'category_desc' => Yii::t('app', 'Category Desc'),
            'category_type_id' => Yii::t('app', 'Category Type'),
            'parent_category' => Yii::t('app', 'Parent Category'),
        ];
    }
}
