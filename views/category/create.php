<?php

use yii\helpers\Html;
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;
use yii\widgets\Menu;


/* @var $this yii\web\View */
/* @var $model app\models\Category */

$this->title = Yii::t('app', 'Create Category');


NavBar::begin(['brandLabel' => 'Menu Adminitrador']);

//definimos los itemos - opciones que se tienen en el a}menu para el amdministardor
echo Nav::widget([
		'items' => [
				[
						'label' => 'Inicio',
						'url' => ['site/admin'],
						'linkOptions' => [],
				],
				[
						'label' => 'Productos',
						'items' => [
								['label' => 'Crear Producto', 'url' => '#'],
								'<li class="divider"></li>',
								'<li class="dropdown-header"></li>',
								['label' => 'Level 1 - Dropdown B', 'url' => '#'],
						],
				],
				[
						'label' => 'Categorias',
						'items' => [
								['label' => 'Categorias', 'url' => '?r=category/index'],
								'<li class="divider"></li>',
								'<li class="dropdown-header"></li>',
								['label' => 'Subategoria', 'url' => '?r=subcategory/index'],
								'<li class="divider"></li>',
								'<li class="dropdown-header"></li>',
								['label' => 'Secciones', 'url' => '?r=sections/index'],
						],
				],
		],
		'options' => ['class' =>'nav-pills'], // set this to nav-tab to get tab-styled navigation
]);

NavBar::end();



?>
<div class="category-create">
	
    <h1><?= Html::encode($this->title) ?></h1>
	
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
