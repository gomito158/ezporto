<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProductSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_product') ?>

    <?= $form->field($model, 'nombre_producto') ?>

    <?= $form->field($model, 'referencia') ?>

    <?= $form->field($model, 'descripcion1') ?>

    <?= $form->field($model, 'descripcion2') ?>

    <?php // echo $form->field($model, 'precioMayoristaSinIva') ?>

    <?php // echo $form->field($model, 'precioAlMenorSinIva') ?>

    <?php // echo $form->field($model, 'impuesto') ?>

    <?php // echo $form->field($model, 'precioVentaConIva') ?>

    <?php // echo $form->field($model, 'CantidadStock') ?>

    <?php // echo $form->field($model, 'imagen1') ?>

    <?php // echo $form->field($model, 'imagen2') ?>

    <?php // echo $form->field($model, 'imagen3') ?>

    <?php // echo $form->field($model, 'imagen4') ?>

    <?php // echo $form->field($model, 'imagen5') ?>

    <?php // echo $form->field($model, 'fk_id_section') ?>

    <?php // echo $form->field($model, 'fk_id_category') ?>

    <?php // echo $form->field($model, 'fk_id_subcategory') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
