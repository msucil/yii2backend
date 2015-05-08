<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use yii\helpers\ArrayHelper;
use common\models\Category;
use common\models\MenuType;
use common\models\Menu;
use kartik\widgets\Select2;


/* @var $this yii\web\View */
/* @var $model common\models\Menu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="menu-form">
    
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'menu_name')->textInput(['maxlength' => 250]) ?>

    <?= $form->field($model, 'category_id')->widget(Select2::className(),[
        'data' => ArrayHelper::map(Category::find()->asArray()->all(),'category_id','category_name'),
        'options'=>[
            'placeholder'=>'Select Category',
        ],
        'pluginOptions'=>[
            'allowClear' => TRUE,
        ]
    ]) ?>

    <?= $form->field($model, 'parent_menu')->widget(Select2::className(),[
        'data'=> ArrayHelper::map(Menu::find()->where(['parent_menu'=>0])->asArray()->all(),'menu_id', 'menu_name'),
        'options'=>['placeholder' => 'Select Parent Menu'],
        'pluginOptions'=>['allowClear'=>TRUE]
    ]) ?>

    <?= $form->field($model, 'menu_type_id')->widget(Select2::className(),[
        'data' => ArrayHelper::map(MenuType::find()->asArray()->all(),'menu_type_id','menu_type_name'),
        'options' => ['placeholder' => 'Select Menu Type'],
        'pluginOptions' =>['allowClear'=> TRUE]
    ]) ?>

    <?= $form->field($model, 'menu_order')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Save') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
