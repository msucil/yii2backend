<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\MenuType */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Menu Type',
]) . ' ' . $model->menu_type_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Menu Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->menu_type_id, 'url' => ['view', 'id' => $model->menu_type_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="menu-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
