<?php 
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;
use yii\widgets\Menu;


//definimos el titulo del menu de adminitración
NavBar::begin(['brandLabel' => 'Menu Adminitrador']);

//definimos los itemos - opciones que se tienen en el a}menu para el amdministardor
echo Nav::widget([
    'items' => [
        [
            'label' => 'Home',
            'url' => ['site/index'],
            'linkOptions' => [],
        ],
        [
            'label' => 'Productos',
            'items' => [
                 ['label' => 'Crear Producto', 'url' => '?r=product/index'],
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