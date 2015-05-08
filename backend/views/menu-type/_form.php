<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\MenuType */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="menu-type-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'menu_type_name')->textInput(['maxlength' => 250]) ?>

    <?= $form->field($model, 'menu_type_desc')->textarea(['maxlength' => 250,'rows'=>4]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Save') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
