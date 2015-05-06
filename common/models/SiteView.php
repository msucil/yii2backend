<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "site_view".
 *
 * @property string $view_date
 * @property integer $view_count
 */
class SiteView extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'site_view';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['view_date'], 'required'],
            [['view_date'], 'safe'],
            [['view_count'], 'integer'],
            [['view_date'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'view_date' => Yii::t('app', 'View Date'),
            'view_count' => Yii::t('app', 'View Count'),
        ];
    }
}
