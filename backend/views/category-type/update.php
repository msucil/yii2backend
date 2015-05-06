<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\CategoryType */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Category Type',
]) . ' ' . $model->category_type_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Category Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->category_type_id, 'url' => ['view', 'id' => $model->category_type_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="category-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
