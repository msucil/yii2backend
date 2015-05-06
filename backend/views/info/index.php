<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Infos');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="info-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Info'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'site_name',
            'slogan',
            'banner',
            'logo',
            // 'meta_tags',
            // 'meta_desc',
            // 'other_info:ntext',
            // 'facebook',
            // 'twitter',
            // 'goolge',
            // 'phone',
            // 'email:email',
            // 'fax',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
