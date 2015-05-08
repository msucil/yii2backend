<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Category */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Category',
]) . ' ' . $model->category_name;

$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->category_name, 'url' => ['view', 'id' => $model->category_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="row">
    <div class='col-lg-12'>
        <div class="ibox-content">
            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
        </div>
    </div>
</div>
