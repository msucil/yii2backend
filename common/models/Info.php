<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "info".
 *
 * @property integer $id
 * @property string $site_name
 * @property string $slogan
 * @property string $banner
 * @property string $logo
 * @property string $meta_tags
 * @property string $meta_desc
 * @property string $other_info
 * @property string $facebook
 * @property string $twitter
 * @property string $goolge
 * @property string $phone
 * @property string $email
 * @property string $fax
 */
class Info extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['site_name'], 'required'],
            [['other_info'], 'string'],
            [['site_name', 'slogan', 'banner', 'logo', 'phone', 'email', 'fax'], 'string', 'max' => 150],
            [['meta_tags', 'meta_desc', 'facebook', 'twitter', 'goolge'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'site_name' => Yii::t('app', 'Site Name'),
            'slogan' => Yii::t('app', 'Slogan'),
            'banner' => Yii::t('app', 'Banner'),
            'logo' => Yii::t('app', 'Logo'),
            'meta_tags' => Yii::t('app', 'Meta Tags'),
            'meta_desc' => Yii::t('app', 'Meta Desc'),
            'other_info' => Yii::t('app', 'Other Info'),
            'facebook' => Yii::t('app', 'Facebook'),
            'twitter' => Yii::t('app', 'Twitter'),
            'goolge' => Yii::t('app', 'Goolge'),
            'phone' => Yii::t('app', 'Phone'),
            'email' => Yii::t('app', 'Email'),
            'fax' => Yii::t('app', 'Fax'),
        ];
    }
}
