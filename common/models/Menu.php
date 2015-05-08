<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property integer $menu_id
 * @property string $menu_name
 * @property integer $category_id
 * @property integer $parent_menu
 * @property integer $menu_type_id
 * @property integer $menu_order
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['menu_name', 'category_id', 'menu_type_id'], 'required'],
            [['category_id', 'parent_menu', 'menu_type_id', 'menu_order'], 'integer'],
            [['menu_name'], 'string', 'max' => 250],
            [['menu_name','category_id'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'menu_id' => Yii::t('app', 'Menu ID'),
            'menu_name' => Yii::t('app', 'Menu Name'),
            'category_id' => Yii::t('app', 'Category'),
            'parent_id' => Yii::t('app', 'Parent Menu'),
            'menu_type_id' => Yii::t('app', 'Menu Type'),
            'menu_order' => Yii::t('app', 'Menu Order'),
        ];
    }
    
    public function getCategory(){
        return $this->hasOne(Category::className(), ['category_id' => 'category_id']);
    }
    
    public function getMenuType(){
        return $this->hasOne(MenuType::className(), ['menu_type_id' => 'menu_type_id']);
    }
}
