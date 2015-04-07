<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;
use yii\widgets\Menu;

/* @var $this yii\web\View */
/* @var $model app\models\CustomCustomer */
/* @var $form yii\widgets\ActiveForm */
$id = Yii::$app->user->identity->idcedula;
//definimos el titulo del menu de adminitración
NavBar::begin(['brandLabel' => 'Menu Clientes']);

//definimos los itemos - opciones que se tienen en el a}menu para el amdministardor
echo Nav::widget([
		'items' => [
				[
						'label' => 'Home',
						'url' => ['site/index'],
						'linkOptions' => [],
				],
				[
						'label' => 'Perfil',
						'items' => [
								['label' => 'Editar Perfil', 'url' => '?r=custom-customer%2Fview&id='.$id.''],
								'<li class="divider"></li>',
								'<li class="dropdown-header"></li>',
								['label' => 'Level 1 - Dropdown B', 'url' => '#'],
						],
				],
				[
						'label' => 'Categorias',
						'items' => [
								['label' => 'Categorias', 'url' => '#'],
								'<li class="divider"></li>',
								'<li class="dropdown-header"></li>',
								['label' => 'Subategoria', 'url' => '#'],
								'<li class="divider"></li>',
								'<li class="dropdown-header"></li>',
								['label' => 'Secciones', 'url' => '#	'],
						],
				],
		],
		'options' => ['class' =>'nav-pills'], // set this to nav-tab to get tab-styled navigation
]);

NavBar::end();

?>

<div class="custom-customer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idcedula')->textInput(['readonly' => true]) ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'apellido')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'direccion')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'telefono')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'celular')->textInput(['maxlength' => 20]) ?>

    <div class="form-group">
        
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
