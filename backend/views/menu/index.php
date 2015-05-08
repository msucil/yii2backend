<?php

use yii\helpers\Html;
use yii\grid\GridView;

use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $searchModel common\models\MenuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Manage Menus');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-lg-4">
        <?= Html::a(Yii::t('app', 'Add Menu'), ['create'], ['class' => 'btn btn-sm btn-white']) ?>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-content">
                    <?= \kartik\grid\GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

//                            'menu_id',
                            'menu_name',
                            [
                                'attribute' => 'category_id',
                                'filterType' => \kartik\grid\GridView::FILTER_SELECT2,
                                'filterWidgetOptions' =>[
                                    'options' => ['placeholder' => 'Select Category'],
                                    'pluginOptions' => ['allowClear' => TRUE]
                                ],
                                'filter' => ArrayHelper::map(\common\models\Category::find()->asArray()->all(), 'category_id', 'category_name'),
                                'value' => function($model, $key, $index){
                                    return $model->category->category_name;
                                }
                            ],
                            
                            [
                                'attribute' => 'parent_menu',
                                'value' => function($model, $key, $index){
                                    return ($model->parent_menu == 0) ? '-': $model->parent_menu;
                                }
                            ],
                                    
                            [
                              'attribute'  => 'menu_type_id',
                                'filterType' => \kartik\grid\GridView::FILTER_SELECT2,
                                'filterWidgetOptions' => [
                                    'options' => ['placeholder' => "Select Menu Type"],
                                    'pluginOptions' =>['allowClear' => TRUE]
                                ],
                                'filter' => ArrayHelper::map(common\models\MenuType::find()->asArray()->all(),'menu_type_id','menu_type_name'),
                                'value' => function($model, $key, $index){
                                    return $model->menuType->menu_type_name;
                                }
                            ],
                            // 'menu_order',

                            [
                                'class' => 'yii\grid\ActionColumn',
                                'header' => 'Action',
                                'template' => '{update} {delete}'
                            ],
                            
                        ],
                        'export' => FALSE,
                        'resizableColumns' => TRUE,
                         'bordered' => FALSE,
                         'hover' => TRUE
                    ]); ?>
                </div>
            </div>
    </div>
</div>
