<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use app\models\Sections;
use yii\bootstrap\Dropdown;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Category */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-form">

    <?php $form = ActiveForm::begin(); ?>
       <?php 
    $fr = date("Y-m-d H:i:s");
    ?>
    <?= $form->field($model, 'id_category')->hiddenInput(['maxlength' => 10,'hidden'=>true])->label(false) ?>

    
     
     <?php //cargamos dropdown cargando los datos de las categorias desde la base de datos
	echo $form->field($model, 'fk_id_section')->dropDownList(
			//creamos un mapa con un arrayhelper o}con el cual llenamos del dropdown
			ArrayHelper::map(Sections::find()->all(),'id_section','nombre_seccion'),
			//solicitamos sleccionar la categoria padre
			['prompt'=>'Seleccione la sección']
			)	
	?>

     <?= $form->field($model, 'date_add')->hiddenInput(['value'=>$fr,'hidden'=>true])->label(false) ?>

    <?= $form->field($model, 'date_upd')->hiddenInput(['value'=>$fr,'hidden'=>true])->label(false)  ?>

    <?= $form->field($model, 'nombre_categoria')->textInput(['maxlength' => 128]) ?>

    <?= $form->field($model, 'descripcion')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
