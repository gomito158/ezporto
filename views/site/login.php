<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login" style="  margin: 0% 0% 0% 10%;" >
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Ingrese su información a continuación para acceder a su cuentan:</p>

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

    <?= $form->field($model, 'username') ?>

    <?= $form->field($model, 'password')->passwordInput() ?>

    <?= $form->field($model, 'rememberMe', [
        'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
    ])->checkbox() ?>
    <div class="form-group">
    <?= Html::a(Html::tag('div',
        Html::tag('i', '', ['class' => 'fa fa-upload fa-fw']) . 'Olvido Contrasena?' .
        Html::tag('span', '', ['class' => 'pull-right text-muted small'])
     ), Url::to('?r=site/recoverpass'));?>
    </div>

    <div class="form-group" >
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
           <?= Html::a('Register', ['/site/clientes'], ['class'=>'btn btn-primary']) ?>
        </div>
        
    </div>
    
    
  
    

    <?php ActiveForm::end(); ?>

    <div class="col-lg-offset-1" style="color:#999;">
        You may login with <strong>admin/admin</strong> or <strong>demo/demo</strong>.<br>
        To modify the username/password, please check out the code <code>app\models\User::$users</code>.
    </div>
</div>
