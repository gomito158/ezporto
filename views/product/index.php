<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Products');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Product'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_product',
            'nombre_producto',
            'referencia',
            'descripcion1:ntext',
            'descripcion2:ntext',
            // 'precioMayoristaSinIva',
            // 'precioAlMenorSinIva',
            // 'impuesto',
            // 'precioVentaConIva',
            // 'CantidadStock',
            // 'imagen1',
            // 'imagen2',
            // 'imagen3',
            // 'imagen4',
            // 'imagen5',
            // 'fk_id_section',
            // 'fk_id_category',
            // 'fk_id_subcategory',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
