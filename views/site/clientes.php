<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;


$this->title = 'Registro Clientes';
$this->params['breadcrumbs'][] = $this->title;
?>

 <div  style="  margin: 0% 0% 0% 10%;" >
 
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
 
 
		 <div class="form-group" >
		 	<table>
		 		<tr>
		 			<td rowspan="2">
		 			<?php echo $form->field($model,"cedula")->input("text")	?>
		 			</td>	
		 		</tr>
		 		<tr>
		 		</tr>
		 		<tr>
		 			<td rowspan="2">
		 			<?php echo $form->field($model,"nombre")->input("text")	?>
		 			</td>
		 			<td>&nbsp;</td>
		 			<td>&nbsp;</td>
		 			<td>&nbsp;</td>
		 			<td rowspan="2">
		 			<?php echo $form->field($model,"apellido")->input("text")	?>
		 			</td>
		 			<td>&nbsp;</td>
		 			<td>&nbsp;</td>
		 			<td>&nbsp;</td>
		 			
		 			<td rowspan="2">
		 			<?php echo $form->field($model,"direccion")->input("text")	?>
		 			</td>
		 		</tr>
		 		<tr></tr>
		 		<tr>
		 			<td >
			 			<?php echo $form->field($model,"email")->input("email")	?>
			 			</td>
			 			<td>&nbsp;</td>
			 			<td>&nbsp;</td>
			 			<td>&nbsp;</td>
			 			<td >
			 			<?php echo $form->field($model,"telefono")->input("text")	?>
			 			</td>
			 			<td>&nbsp;</td>
			 			<td>&nbsp;</td>
			 			<td>&nbsp;</td>
			 			<td>
			 			<?php echo $form->field($model,"celular")->input("text")	?>
		 				</td>	 				 	
		 		</tr>
		 		<tr></tr>
		 		<tr>
		 			<td >
			 			<?= $form->field($model, "username")->input("text") ?>   
			 			</td>
			 			<td>&nbsp;</td>
			 			<td>&nbsp;</td>
			 			<td>&nbsp;</td>
			 			<td >
			 			<?= $form->field($model, "password")->input("password") ?>    
			 			</td>
			 			<td>&nbsp;</td>
			 			<td>&nbsp;</td>
			 			<td>&nbsp;</td>
			 			<td >
			 			 <?= $form->field($model, "password_repeat")->input("password") ?>     
			 			</td>
			 			<td>&nbsp;</td>
			 			<td>&nbsp;</td>
			 			<td>&nbsp;</td> 				 	
		 		</tr>
		 		</td>	 				 	
		 		</tr>
		 		
		 	</table>
		 </div>
		
		 
		 <?php echo html::submitButton("Registrar",["class"=>"btn btn-primary"])?>
		 
		 <?php $form->end()?>
		 
 </div>
