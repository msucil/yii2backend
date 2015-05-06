<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Category */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'category_name')->textInput(['maxlength' => 250]) ?>

    <?= $form->field($model, 'category_desc')->textInput(['maxlength' => 250]) ?>

    <?= $form->field($model, 'category_type_id')->widget(kartik\widgets\Select2::className(),['options'=>['placeholder'=>'Select Category Type'],'data'=> common\helpers\CategoryTypeHelper::getTypes()]) ?>
    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
