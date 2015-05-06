<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Info */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="info-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'site_name')->textInput(['maxlength' => 150]) ?>

    <?= $form->field($model, 'slogan')->textInput(['maxlength' => 150]) ?>

    <?= $form->field($model, 'banner')->textInput(['maxlength' => 150]) ?>

    <?= $form->field($model, 'logo')->textInput(['maxlength' => 150]) ?>

    <?= $form->field($model, 'meta_tags')->textInput(['maxlength' => 250]) ?>

    <?= $form->field($model, 'meta_desc')->textInput(['maxlength' => 250]) ?>

    <?= $form->field($model, 'other_info')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'facebook')->textInput(['maxlength' => 250]) ?>

    <?= $form->field($model, 'twitter')->textInput(['maxlength' => 250]) ?>

    <?= $form->field($model, 'goolge')->textInput(['maxlength' => 250]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => 150]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 150]) ?>

    <?= $form->field($model, 'fax')->textInput(['maxlength' => 150]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
