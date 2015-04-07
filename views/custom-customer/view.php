<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;
use yii\widgets\Menu;

/* @var $this yii\web\View */
/* @var $model app\models\CustomCustomer */

$this->title = $model->idcedula;
/* $this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Custom Customers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title; */
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
<div class="custom-customer-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Actualizar'), ['update', 'id' => $model->idcedula], ['class' => 'btn btn-primary']) ?>
       
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idcedula',
            'nombre',
            'apellido',
            'direccion',
            'email:email',
            'telefono',
            'celular',
        ],
    ]) ?>

</div>
