<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Menu */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Menu',
]) . ' ' . $model->menu_name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Menus'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->menu_name, 'url' => ['view', 'id' => $model->menu_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="row">
    <div class="col-lg-12">
        <div class="ibox">
            <div class="ibox-content">
                <?= $this->render('_form', [
                    'model' => $model,
                ]) ?>
            </div>
        </div>
    </div>
</div>
