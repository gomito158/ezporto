<?php

use yii\helpers\Html;
use yii\grid\GridView;

use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;
use yii\widgets\Menu;
/* @var $this yii\web\View */
/* @var $searchModel app\models\SubcategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Subcategories');
//$this->params['breadcrumbs'][] = $this->title;

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
<div class="subcategory-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Subcategory'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_subcategory',
            'fk_id_category',
            'nombre_subcategoria',
            'descripcion:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
