<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\CategoryType */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-type-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'category_type_name')->textInput() ?>

    <?= $form->field($model, 'category_type_desc')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
