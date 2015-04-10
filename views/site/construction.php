<?php

namespace app\models;
use yii\helpers\Html;
use app\models\ProductSearch;

use yii\grid\GridView;


use yii\db\Query;
USE yii\data\SqlDataProvider;
use yii\web;
use yii\helpers\Url;
use yii\web\Application;
use Yii;
use yii\grid\SerialColumn;
use yii\grid\DataColumn;
use yii\widgets\LinkPager;
use yii\widgets;
use yii\data\Pagination;
/* @var $this yii\web\View */
$this->title = 'construction';
$this->params['breadcrumbs'][] = $this->title;
?>
	<?php 
	
	$img = new ProductSearch();
	$searchModel= new ProductSearch();
	$query = new Query();
	//$dataProvider = $img->search(Yii::$app->request->queryParams);
	$query ->select([
			'DISTINCT(pr.id_product)','pr.nombre_producto as nombre_producto',
			'pr.imagen1 as imagen1','pr.imagen2 as imagen2',
			'pc.fk_id_product','pc.fk_id_section',
			'pc.fk_id_category','pc.fk_id_section'])
			->from('ezp_product_category pc')
			/* ->join('INNER JOIN','ezp_product pr','pc.fk_id_product = pr.id_product')
			->join('inner join','ezp_subcategory sub','sub.id_subcategory = pc.fk_id_subcategory')
			->join('inner join','ezp_category cat','pc.fk_id_category = cat.id_category')
			->join('inner join', 'ezp_sections sec','pc.fk_id_section = sec.id_section') */
			->innerJoin('ezp_product pr','pc.fk_id_product = pr.id_product')
			->innerJoin('ezp_subcategory sub','sub.id_subcategory = pc.fk_id_subcategory')
			->innerJoin('ezp_category cat','pc.fk_id_category = cat.id_category')
			->innerJoin('ezp_sections sec','pc.fk_id_section = sec.id_section')
			->orderBy('pr.nombre_producto desc')
			;
	
			$command = $query->createCommand();
			$count = $command->queryScalar();
			$img = $command->queryAll();
			
			$dataProvider = $img;
			$dataProvider = new SqlDataProvider(
					[
							'sql' => 'select 	nombre_producto,  concat("/ezporto/web/uploads/",imagen1) as imagen1,
									concat("/ezporto/web/uploads/",imagen2) as imagen2, referencia,precioVentaConIva,
									CantidadStock,descripcion1
									from ezp_product_category pc
									INNER JOIN ezp_product pr ON
									pc.fk_id_product = pr.id_product
									inner join ezp_subcategory sub
									on sub.id_subcategory = pc.fk_id_subcategory
									inner join ezp_category cat on
									pc.fk_id_category = cat.id_category
									inner join ezp_sections sec on
									pc.fk_id_section = sec.id_section
						
									ORDER BY pc.fk_id_section ASC
			
		    				',
							//'totalCount' => $count,
							'sort' => [
									'attributes' => [
											'nombre_producto',
											'imagen1',
											'imagen2',
			
									],
							],
							
							'pagination'=>[

            	'pageSize' => 50,
		        //'page' => $this->page,
		        'pageSizeLimit' => [1,10],
		        'pageSizeParam' => 'per_page',
				'totalCount' => $count,
        ],	
							
			
			
					]
			);
			
			
			
			
	
	?>




<div class="site-about" style="float: left; margin: 0px 0px 0px 8%">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Sitio en Construcci&oacute;n
    </p>
    <!-- <img alt="construction" src="./images/construction.png"> -->
	<div>
	
    <?php

 
     echo GridView::widget([
     		
    'dataProvider' => $dataProvider,
    
    //'filterModel' => $searchModel,
    'columns' => [
        	['class' => SerialColumn::className()],
        	//definimos los campos que se desean mostrar que vienen en el dataprovider
        	'nombre_producto',
       		'referencia',
    		'descripcion1',
    		'precioVentaConIva',
    		'CantidadStock',
    		[
    		//se define el formato de imagen y pasa el paranetro de imagen1
    		'label' => 'imagen',
    		'format' => ['image',['width'=>'100','height'=>'100']],
    		/* 'value' => function ($model) {
    		 return $model->getImageUrl();
    		},	 */
    		'value' => 'imagen2',
    		 
    		 
    		//'contentOptions'=>['style'=>'width: 2%;']
    		],
        //'username',
        // 'password',
        // 'user_type',
        // 'creator',   
    		//['class' => 'yii\grid\ActionColumn'],
    ],
    
     		//'tableOptions'=>['class'=>'table table-condensed']
    
		]); 
     ?>
     <?php 
     echo \yii\widgets\LinkPager::widget([
     		'pagination'=>$dataProvider->pagination,
     ]);
     
     ?>
      
     </div>
</div>