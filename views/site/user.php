<?php 
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;
use yii\widgets\Menu;
use app\models\User;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\DetailView;
use app\models\CustomCustomer;
use yii\helpers\ArrayHelper;



$id = Yii::$app->user->identity->idcedula;

//definimos el titulo del menu de adminitración
NavBar::begin(['brandLabel' => 'Menu Clientes']);

//definimos los itemos - opciones que se tienen en el a}menu para el amdministardor
echo Nav::widget([
    'items' => [
       
        [
            'label' => 'Mi Perfil',
            'items' => [
                 ['label' => 'Editar Perfil', 'url' => '?r=custom-customer%2Fview&id='.$id.''],
                
                 '<li class="dropdown-header"></li>',
                 
            ],
        ],
    	 [
            'label' => 'Mis Pedidos',
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

	<div class="container">
	  <div class="container" style="margin: 30px auto auto 14%">
	  
	    <div class="thumbnail" style="float: left;">      
	      <div class="caption">
	        <h1>Datos Personales</h1>
	        <?php 
	        
	        $model = new CustomCustomer();
	        
	        $conecction = Yii::$app->db;
	        $sql = 'select idcedula,nombre,apellido,direccion,email,telefono,celular from ps_custom_customer where idcedula='.$id.'';
	        $comando = $conecction->createCommand($sql);
	        $comando->execute();
	        
	        
	        ?>	        		            	    
	        <p>
	        <img src="../web/images/user_profile.png" alt="...">
	        <div>
			
	      <?php 
	      
	      $cc = ArrayHelper::map(CustomCustomer::findBySql($sql)->all(), 'idcedula', 'idcedula');
	      	$form = ActiveForm::begin();
	      	echo $form->field($model, 'cedula')
	      	->textinput(
	      			           // Flat array ('id'=>'label')
	      			[ 'value'=>implode(",", $cc),'readonly' => true ]    // options
	      	);
	      	$form::end();
	      ?>	     	   
	      </div>
	      <div>
	     
	        <?php 
	      
	      $nom = ArrayHelper::map(CustomCustomer::findBySql($sql)->all(), 'nombre', 'nombre');
	      	$form = ActiveForm::begin();
	      	echo $form->field($model, 'nombres')
	      	->textinput(
	      			           // Flat array ('id'=>'label')
	      			[ 'value'=>implode(",", $nom),'readonly' => true ]    // options
	      	);
	      	$form::end();
	      ?>
	      </div>
	      <div>
	      
	        <?php 
	      
	      $ape = ArrayHelper::map(CustomCustomer::findBySql($sql)->all(), 'apellido', 'apellido');
	      	$form = ActiveForm::begin();
	      	echo $form->field($model, 'apellidos')
	      	->textinput(
	      			           // Flat array ('id'=>'label')
	      			[ 'value'=>implode(",", $ape),'readonly' => true ]    // options
	      	);
	      	$form::end();
	      ?>
	      </div>
	      <div>
	       
	      <?php 
	      
	      $dir = ArrayHelper::map(CustomCustomer::findBySql($sql)->all(), 'direccion', 'direccion');
	      	$form = ActiveForm::begin();
	      	echo $form->field($model, 'direccion')
	      	->textinput(
	      			           // Flat array ('id'=>'label')
	      			[ 'value'=>implode(",", $dir),'readonly' => true ]    // options
	      	);
	      	$form::end();
	      ?>
	      </div>
	      <div>       
	     
	      <?php 
	      
	      $mail = ArrayHelper::map(CustomCustomer::findBySql($sql)->all(), 'email', 'email');
	      	$form = ActiveForm::begin();
	      	echo $form->field($model, 'email')
	      	->textinput(
	      			           // Flat array ('id'=>'label')
	      			[ 'value'=>implode(",", $mail),'readonly' => true ]    // options
	      	);
	      	$form::end();
	      ?>
	      </div>
	      <div>
	     
	       <?php 
	      
	      $tel = ArrayHelper::map(CustomCustomer::findBySql($sql)->all(), 'telefono', 'telefono');
	      	$form = ActiveForm::begin();
	      	echo $form->field($model, 'telefono')
	      	->textinput(
	      			           // Flat array ('id'=>'label')
	      			[ 'value'=>implode(",", $tel),'readonly' => true ]    // options
	      	);
	      	$form::end();
	      ?>
	      </div>
	      <div>
	      
	      <?php 
	      
	      $celular = ArrayHelper::map(CustomCustomer::findBySql($sql)->all(), 'celular', 'celular');
	      	$form = ActiveForm::begin();
	      	echo $form->field($model, 'celular')
	      	->textinput(
	      			           // Flat array ('id'=>'label')
	      			[ 'value'=>implode(",", $celular),'readonly' => true ]    // options
	      	);
	      	$form::end();
	      ?>
	      </div>
	        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
	      </div>
	    </div>
	    <div class="thumbnail" style="float: left;">
	      
	      <div class="caption">
	        <h1>Ultima Compra</h1>
	        <p>
	        <img src="../web/images/lastbuy.png" alt="...">
	        <p>...</p>
	        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
	      </div>
	    </div>
	    <div class="thumbnail" style="float: left;">
	     
	      <div class="caption">
	        <h1>Mis Pedidos</h1>
	        <p>
	        <img src="../web/images/addlist.png" alt="...">
	        <p>...</p>
	        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
	      </div>
	    </div>
	   
	  </div>
	  
	
	</div>
