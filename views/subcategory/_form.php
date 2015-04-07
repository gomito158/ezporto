<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Category;
use yii\bootstrap\Dropdown;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Subcategory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="subcategory-form">

    <?php $form = ActiveForm::begin(); ?>

    
    <?php //cargamos dropdown cargando los datos de las categorias desde la base de datos
		echo $form->field($model, 'fk_id_category')->dropDownList(
				//creamos un mapa con un arrayhelper o}con el cual llenamos del dropdown
				ArrayHelper::map(Category::find()->all(),'id_category','nombre_categoria'),
				//solicitamos sleccionar la categoria padre
				['prompt'=>'Seleccione la Categoria padre']
				)	
		?>

    <?= $form->field($model, 'nombre_subcategoria')->textInput(['maxlength' => 128]) ?>

    <?= $form->field($model, 'descripcion')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
