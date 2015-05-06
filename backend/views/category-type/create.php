<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\CategoryType */

$this->title = Yii::t('app', 'Create Category Type');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Category Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
