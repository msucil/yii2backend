<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "menu_type".
 *
 * @property integer $menu_type_id
 * @property string $menu_type_name
 * @property string $menu_type_desc
 */
class MenuType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'menu_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['menu_type_name'], 'required'],
            [['menu_type_name', 'menu_type_desc'], 'string', 'max' => 250],
            [['menu_type_name'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'menu_type_id' => Yii::t('app', 'Menu Type ID'),
            'menu_type_name' => Yii::t('app', 'Menu Type Name'),
            'menu_type_desc' => Yii::t('app', 'Description'),
        ];
    }
}
