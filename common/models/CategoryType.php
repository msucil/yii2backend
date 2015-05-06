<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "category_type".
 *
 * @property integer $category_type_id
 * @property integer $category_type_name
 * @property integer $category_type_desc
 */
class CategoryType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_type_name', 'category_type_desc'], 'required'],
            [['category_type_name', 'category_type_desc'], 'integer'],
            [['category_type_name'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'category_type_id' => Yii::t('app', 'Category Type ID'),
            'category_type_name' => Yii::t('app', 'Category Type Name'),
            'category_type_desc' => Yii::t('app', 'Category Type Desc'),
        ];
    }
}
