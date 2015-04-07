<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Sections;
use app\models\Category;
use app\models\Subcategory;

/* @var $this yii\web\View */
/* @var $model app\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'nombre_producto')->textInput(['maxlength' => 128]) ?>

    <?= $form->field($model, 'referencia')->textInput(['maxlength' => 32]) ?>

    <?= $form->field($model, 'descripcion1')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'descripcion2')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'precioMayoristaSinIva')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'precioAlMenorSinIva')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'impuesto')->textInput(['maxlength' => 17]) ?>

    <?= $form->field($model, 'precioVentaConIva')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'CantidadStock')->textInput() ?>
    
 	<!-- imagen -->    
   	<?= $form->field($model, 'imagen1')->fileInput() ?>
            
    <!-- fin imagen -->
    
	<!-- imagen 2 -->
    
    <?= $form->field($model, 'imagen2')->fileInput() ?>
	<!-- imagen 2 -->
    
    <!-- imagen 3 -->
    
    <?= $form->field($model, 'imagen3')->fileInput() ?>
	<!-- imagen 3 -->
    
    <!-- imagen 4 -->
   
     <?= $form->field($model, 'imagen4')->fileInput() ?>
	<!-- imagen 4 -->
    
    <!-- imagen 5 -->
   
    <?= $form->field($model, 'imagen5')->fileInput() ?>
	<!-- imagen 5 -->
    
    <!-- llave de seccion -->
    
    <?= $form->field($model, 'fk_id_section')->checkboxList(
    		ArrayHelper::map(Sections::find()->all(),'id_section','nombre_seccion')
    		
    		)

    ?>
    <!-- llave de seccion -->
    
	<!-- llave de categorias -->
   
    <?= $form->field($model, 'fk_id_category')->checkboxList(
    		ArrayHelper::map(Category::find()->all(),'id_category','nombre_categoria')
    		
    		)

    ?>
	<!-- fin llave de categorias -->
    
    <!-- llave de subcategorias -->
    
    
    <?= $form->field($model, 'fk_id_subcategory')->checkboxList(
    		ArrayHelper::map(Subcategory::find()->all(),'id_subcategory','nombre_subcategoria')
    		
    		)

    ?>
    <!-- fin llave de subcategorias -->
	
    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
