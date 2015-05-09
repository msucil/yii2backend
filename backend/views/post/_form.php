<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Category;

/* @var $this yii\web\View */
/* @var $model common\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>  

   

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>
       
    <?php if($model->hasErrors()): ?>
                <?= kartik\widgets\Alert::widget([
                    'body' => $form->errorSummary($model),
                    'type' => kartik\widgets\Alert::TYPE_WARNING
                ]); ?>
           
    <?php endif; ?>
    
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
            <div class="ibox-content">
                <?= $form->field($model, 'post_title')->textInput(['maxlength' => 250]) ?>
            </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-content">
                    <?= $form->field($model, 'post_content')->widget(\dosamigos\ckeditor\CKEditor::className(),['options'=>['rows'=>10],'preset'=>'advance']) ?>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="ibox">
                <div class="ibox-content">
                    <?php //= $form->field($model, 'slug')->textInput(['maxlength' => 250]) ?>

                    

                    <?= $form->field($model, 'category_id')->widget(kartik\widgets\Select2::className(),[
                        'data' => ArrayHelper::map(Category::find()->where(['category_type_id' => \common\helpers\CategoryTypeHelper::POST])->asArray()->all(),'category_id','category_name'),
                        'options' => ['placeholder' => 'Select Category'],
                        'pluginOptions' => ['allowClear' => TRUE]
                    ]) ?>

                    <?= $form->field($model, 'featured_post')->checkbox() ?>

                    <?= $form->field($model, 'status_id')->widget(kartik\widgets\Select2::className(),[
                        'data' => \common\helpers\StatusHelper::getStatus(),
                        'options' => ['placeholder' => 'Select Status'],
                        'pluginOptions' => ['allowClear' => TRUE]
                    ]) ?>

                    <div class="form-group">
                        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Save') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="ibox">
                <div class="ibox-content">
                    <?= $form->field($model, 'image')->widget(kartik\widgets\FileInput::className(),[
                        'pluginOptions'=>['showUpload'=>FALSE,
                            'initialPreview'=>[
                            Html::img('@default/file.jpg',['class'=>'img-responsive file-preview-image','style'=>'width: 100%']),
                            ],
                            'showCatpion' => TRUE,
                            'initialCaption' =>'file.jpg',
                            'overwirteInitial' => TRUE
                            
                        ],
                        
                    ]) ?>
                    
                    <?php if($model->image): ?>
                    <div class="form-group">
                        <label class="control-label" for="rm-image"><input id="rm-image" type="checkbox" value="1" class="" name="removeImage" /> Remove Image</label>
                    </div>
                    <?php endif; ?>

                    <?= $form->field($model, 'meta_tags')->textInput(['maxlength' => 250]) ?>

                    <?= $form->field($model, 'meta_desc')->textarea(['maxlength' => 250,'rows'=>3]) ?>


                    <?php //= $form->field($model, 'main_page')->textInput() ?>

                    <?php //= $form->field($model, 'user_id')->textInput() ?>

                </div>
            </div>
        </div>

    </div>

    <?php ActiveForm::end(); ?>


