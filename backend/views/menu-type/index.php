<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Manage Menu Types');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-lg-4">
        <?= Html::a(Yii::t('app', 'Add Menu Type'), ['create'], ['class' => 'btn btn-white btn-sm']) ?>
    </div>
</div>

<div class="row">
    <div class='col-lg-12'>
        <div class="ibox">
            <div class="ibox-content">
                <?= \kartik\grid\GridView::widget([
                    'dataProvider' => $dataProvider,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],
                        
                        'menu_type_name',
                        'menu_type_desc',

                        [
                            'class' => 'yii\grid\ActionColumn',
                            'header' => 'Action',
                            'template' => '{update} {delete}'
                        ],
                    ],
                    'export' => FALSE,
                    'bordered' => FALSE,
                    'hover' => TRUE,
                ]); ?>
            </div>
        </div>
    </div>
</div>

