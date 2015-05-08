<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\MenuType */

$this->title = Yii::t('app', 'Add Menu Type');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Menu Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-lg-12">
        <div class='ibox'>
            <div class='ibox-content'>
                <?= $this->render('_form', [
                    'model' => $model,
                ]) ?>
            </div>
        </div>
    </div>
</div>
