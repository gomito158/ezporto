<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<h1>Formulario de registro de clientes</h1>
<h3><?php echo $msg ?></h3>
<?php 
 $form = ActiveForm::begin([
		 "method"=>"post",
 		 "id"=>"formulario-registrocliente",
 		 "enableClientValidation"=>true,			
		//habilitamos la validación  ajax
		 "enableAjaxValidation"=>true,
])
?>
 
 <div class="form-group">
 	<?php echo $form->field($model,"nombre")->input("text")	?>
 </div>
 <div class="form-group">
 	<?php echo $form->field($model,"apellido")->input("text")	?>
 </div>
  <div class="form-group">
 	<?php echo $form->field($model,"cedula")->input("text")	?>
 </div>
  <div class="form-group">
 	<?php echo $form->field($model,"direccion")->input("text")	?>
 </div>
  <div class="form-group">
 	<?php echo $form->field($model,"email")->input("email")	?>
 </div>	
  <div class="form-group">
 	<?php echo $form->field($model,"telefono")->input("text")	?>
 </div>
  <div class="form-group">
 	<?php echo $form->field($model,"celular")->input("text")	?>
 </div>
 <!-- información de usuario y contraseña de login -->
 <div class="form-group">
 <?= $form->field($model, "username")->input("text") ?>   
</div>
<div class="form-group">
 <?= $form->field($model, "password")->input("password") ?>   
</div>
 
<div class="form-group">
 <?= $form->field($model, "password_repeat")->input("password") ?>   
</div>
 
 <?php echo html::submitButton("Registrar",["class"=>"btn btn-primary"])?>
 
 <?php $form->end()?>
