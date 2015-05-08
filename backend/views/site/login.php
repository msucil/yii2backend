<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Login';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="middle-box text-center loginscreen animated fadeInDown">
    <div>
        
        <div>
            <h1 class="logo-name">SA'</h1>
        </div>
        
        <h3>Welcome to SA CMS</h3>
        
        <p>Login</p>
        
        <?php $form = ActiveForm::begin(['id' => 'login-form','class'=>'m-t']); ?>
                <?= $form->field($model, 'username')->textInput(['placeholder'=>'Username'])->label(FALSE) ?>
                <?= $form->field($model, 'password')->passwordInput(['placeholder'=>'Password'])->label(FALSE) ?>
                <?= $form->field($model, 'rememberMe')->checkbox() ?>
                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>
        <?php ActiveForm::end(); ?>
       
    </div>
</div>
        