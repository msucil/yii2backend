<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Categories');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Category'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?=    kartik\grid\GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'category_id',
            'category_name',
            'category_desc',
            'category_type_id',
            'parent_category',

            ['class' => 'yii\grid\ActionColumn',
                'header' => 'Action',
                'template' => "{subcategory} {update} {delete}",
                'buttons' =>[
                    'subcategory' => function($url,$model,$key){
                        return Html::a("<i class='glyphicon glyphicon-user'></i>",$url);
                    }
                ]
            ],
            [
                'class'=> 'yii\grid\CheckboxColumn',
                'multiple' => TRUE
            ]
        ],
        'export' => FALSE
    ]); ?>

</div>
