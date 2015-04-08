<?php
use yii\helpers\Html;
use app\models\ProductSearch;
use yii\grid\GridView;

/* @var $this yii\web\View */
$this->title = 'construction';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about" style="float: left; margin: 0px 0px 0px 40%">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Sitio en Construcci&oacute;n
    </p>
    <img alt="construction" src="./images/construction.png">

    <?php

    $img = new ProductSearch();
    
    $dataProvider = $img->search(Yii::$app->request->queryParams);  
     
     echo GridView::widget([
     		
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        //'user_id',
        'nombre_producto',
    	[
		    'format' => 'image',
		    'value' => function ($model) {
		        return $model->getImageUrl(); 
		    },		    
		    //'contentOptions'=>['style'=>'width: 2%;'] 
		],
		
        //'lname',
        //'username',
        // 'password',
        // 'user_type',
        // 'creator',             
    ],
   
    
    
]); ?>
</div>