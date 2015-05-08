<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Category */

$this->title = Yii::t('app', 'Add Category');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class='col-lg-12'>
        <div class='ibox-content'>
             <?= $this->render('_form', [
                'model' => $model,
                ]) ?>
        </div>
    </div>
</div>
