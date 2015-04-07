<?php
namespace app\controllers;

use Yii;
use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\web\Application ;
use yii\widgets\ActiveForm;
use yii\helpers\Url;


/* @var $this yii\web\View */
/* @var $model app\models\Product */

$this->title = $model->id_product;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Products'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id_product], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id_product], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_product',
            'nombre_producto',
            'referencia',
            'descripcion1:ntext',
            'descripcion2:ntext',
            'precioMayoristaSinIva',
            'precioAlMenorSinIva',
            'impuesto',
            'precioVentaConIva',
            'CantidadStock',
            array(
            		'label'=>'imagen1',
            		'type'=>'text',
            		//'value'=>html_entity_decode(Html::img('/uploads/'.$model->imagen1,['width'=>341,'height'=>232])),
            		//'value'=>html_(html::img('@web/uploads/'.$model->imagen1.'png',["width"=>200, "height"=>200	]))
            		//'value'=>html::img('@web/uploads/'.$model->imagen1,['style'=>'width: 200px; height: 200px']),
            		//'htmlOptions'=>array('style'=>'width: 200px; height: 200px'),
            		'value'=>'/ezporto/web/uploads/'.$model->imagen1,
            		'format'=>	['image',['width'=>'100','height'=>'100']],
    ),
            array(
            		'label'=>'imagen2',
            		'type'=>'text',
            		//'value'=>html_entity_decode(Html::img('/uploads/'.$model->imagen1,['width'=>341,'height'=>232])),
            		//'value'=>html_(html::img('@web/uploads/'.$model->imagen1.'png',["width"=>200, "height"=>200	]))
            		//'value'=>html::img('@web/uploads/'.$model->imagen1,['style'=>'width: 200px; height: 200px']),
            		//'htmlOptions'=>array('style'=>'width: 200px; height: 200px'),
            		'value'=>'/ezporto/web/uploads/'.$model->imagen2,
            		'format'=>	['image',['width'=>'100','height'=>'100']],
    ),
            array(
            		'label'=>'imagen3',
            		'type'=>'text',
            		//'value'=>html_entity_decode(Html::img('/uploads/'.$model->imagen1,['width'=>341,'height'=>232])),
            		//'value'=>html_(html::img('@web/uploads/'.$model->imagen1.'png',["width"=>200, "height"=>200	]))
            		//'value'=>html::img('@web/uploads/'.$model->imagen1,['style'=>'width: 200px; height: 200px']),
            		//'htmlOptions'=>array('style'=>'width: 200px; height: 200px'),
            		'value'=>'/ezporto/web/uploads/'.$model->imagen3,
            		'format'=>	['image',['width'=>'100','height'=>'100']],
    ),
            array(
            		'label'=>'imagen4',
            		'type'=>'text',
            		//'value'=>html_entity_decode(Html::img('/uploads/'.$model->imagen1,['width'=>341,'height'=>232])),
            		//'value'=>html_(html::img('@web/uploads/'.$model->imagen1.'png',["width"=>200, "height"=>200	]))
            		//'value'=>html::img('@web/uploads/'.$model->imagen1,['style'=>'width: 200px; height: 200px']),
            		//'htmlOptions'=>array('style'=>'width: 200px; height: 200px'),
            		'value'=>'/ezporto/web/uploads/'.$model->imagen4,
            		'format'=>	['image',['width'=>'100','height'=>'100']],
    ),
            array(
            		'label'=>'imagen5',
            		'type'=>'text',
            		//'value'=>html_entity_decode(Html::img('/uploads/'.$model->imagen1,['width'=>341,'height'=>232])),
            		//'value'=>html_(html::img('@web/uploads/'.$model->imagen1.'png',["width"=>200, "height"=>200	]))
            		//'value'=>html::img('@web/uploads/'.$model->imagen1,['style'=>'width: 200px; height: 200px']),
            		//'htmlOptions'=>array('style'=>'width: 200px; height: 200px'),
            		'value'=>'/ezporto/web/uploads/'.$model->imagen5,
            		'format'=>	['image',['width'=>'100','height'=>'100']],
    ),
            'fk_id_section',
            'fk_id_category',
            'fk_id_subcategory',
        ],
    ]) ?>

</div>
