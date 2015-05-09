<?php

use yii\helpers\Html;
//use yii\grid\GridView;

use kartik\grid\GridView;
use common\helpers\StatusHelper;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Posts');
$this->params['breadcrumbs'][] = $this->title;
?>

    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    
        <?= Html::a(Yii::t('app', 'New Post'), ['create'], ['class' => 'btn btn-white btn-sm']) ?>
    

    <div class="">
        <div class="ibox">
            <div class="ibox-content">
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

            //            'post_id',
                        'post_title',
            //            'slug',
            //            'post_content:ntext',
                        [
                            'attribute' => 'image',
                            'format' => 'raw',
                            'value' => function($model, $key, $index){
                                return ($model->image) ? Html::img('@resource/'.$model->image,['class' => 'img-responsive img-thumbnail','style'=>'width: 150px; height: 80px;']) : FALSE;
                            }
                        ],
                        [
                          'attribute'   => 'category_id',
                            'filterType' => GridView::FILTER_SELECT2,
                            'filterWidgetOptions' => [
                                'options' => ['placeholder' => 'Select Category'],
                                'pluginOptions' => ['allowClear' => TRUE]
                            ],
                            'filter' => ArrayHelper::map(\common\models\Category::find()->asArray()->all(), 'category_id', 'category_name'),
                            'value' => function($model, $key, $index){
                                return $model->category->category_name;
                           }
                        ],
                                
                        [
                            'attribute' => 'status_id',
                            'filterType' => GridView::FILTER_SELECT2,
                            'filterWidgetOptions' => [
                                'options' => ['placeholder' => 'Select Status'],
                                'pluginOptions' => ['allowClear' => TRUE]
                            ],
                            'filter' => StatusHelper::getStatus(),
                            'value' => function($model, $key, $index){
                                return StatusHelper::getName($model->status_id);
                            }
                        ],
                        // 'meta_tags',
                        // 'meta_desc',

//                         'featured_post',
                        // 'main_page',
                         [
//                            'filterType' => GridView::FILTER_DATE,
//                            'filterWidgetOptions' => [
//                                'options' => ['placeholder' => 'Select Category'],
//                                'pluginOptions' => ['allowClear' => TRUE]
//                            ],
                             
                            'attribute' => 'created_at',
                             'format' => 'date',
                        ],
                        // 'updated_at',
                         [
                           'attribute' => 'user_id',
                             'filterType' => GridView::FILTER_SELECT2,
                            'filterWidgetOptions' => [
                                'options' => ['placeholder' => 'Select User'],
                                'pluginOptions' => ['allowClear' => TRUE]
                            ],
                            'filter'=> ArrayHelper::map(common\models\User::find()->asArray()->all(),'id','username'),
                            'value' => function($model,$key, $index){
                                return $model->user->username;
                            }
                         ],


                        [
                            'class' => 'yii\grid\ActionColumn',
                            'header' => 'Action',
                            'template' => '{update} {delete}'
                        ],
                    ],
                    'export' => FALSE,
                    'bordered' => FALSE,
                    'resizableColumns' => TRUE,
                    'hover' => TRUE
                ]); ?>
            </div>
        </div>
    </div>
    


