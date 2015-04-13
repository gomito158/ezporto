<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Recuperar Contrasena';
$this->params['breadcrumbs'][] = $this->title;
?>
 <!-- esta vista se encargara de recuperar la contraseña dle usuario emn caso de que sea olvidada 
 
 Crear la vista recoverpass.php formulario desde el cual el usuario deberá introducir su email 
 --> 
 <div style="  margin: 0% 0% 0% 7%;">
<h3><?= $msg ?></h3>
 
<h1>Recuperar Contrase&ntilde;a</h1>
<?php $form = ActiveForm::begin([
    'method' => 'post',
    'enableClientValidation' => true,
]);
?>
  
<div class="form-group">
 <?= $form->field($model, "email")->input("email",['style'=>'width: 20%']) ?>  
</div>
  
<?= Html::submitButton("Recuperar Contrase&ntilde;a", ["class" => "btn btn-primary"]) ?>
  
<?php $form->end() ?>
</div>