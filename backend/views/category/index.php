<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Manage Categories');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class='col-lg-4'>
        <div class="index-menu" style='margin-bottom: 20px;'>
        <?= Html::a(Yii::t('app', 'Add Category'), ['create'], ['class' => 'btn btn-white btn-sm']) ?>
        <?= Html::a(Yii::t('app','Batch Delete'),['delete-selected'],['class' => 'btn btn-white btn-sm']) ?>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-content">
                    <?=    kartik\grid\GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

            //            'category_id',
                        'category_name',
                        'category_desc',
                        [
                            'attribute' => 'category_type_id',
//                            'format' => 'raw',
                            'filterType' => kartik\grid\GridView::FILTER_SELECT2,
                            'filterWidgetOptions'=>['options'=>['placeholder'=>'Select Category Type'],'pluginOptions'=>['allowClear'=>TRUE]],
                            'filter'=> common\helpers\CategoryTypeHelper::getTypes(),
                            
                            'value' => function($model, $key, $index){
                                return \common\helpers\CategoryTypeHelper::getTypeName($model->category_type_id);
                            }
                            
                        ],
                                
                        [
                            'attribute' => 'parent_category',
                            'filterType' => kartik\grid\GridView::FILTER_SELECT2,
                            'filterWidgetOptions'=>['options'=>['placeholder'=>'Select Parent Category'],'pluginOptions'=>['allowClear'=>TRUE]],
                            'filter' => yii\helpers\ArrayHelper::map(common\models\Category::find()->where(['parent_category'=>0])->asArray()->all(),"category_id","category_name"),
                            'value' =>function($model,$key,$index){
                                return ($model->parent_category == 0) ? '-': TRUE;
                            }
                        ],

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
//                    'emptyCell' => '-',
                    'export' => FALSE,
                    'bordered' => FALSE,
                    'hover' => TRUE,
//                    'resizable' => TRUE,
                ]); ?>
                    
            </div>
        </div>
    </div>
</div>
