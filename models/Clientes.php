<?php
namespace app\models;
use Yii;
use yii\db\ActiveRecord;

class Clientes extends ActiveRecord{
	
	public static function getDb(){
		
		//retornna la conexion de la db
		return  Yii::$app->db;
	}
	
	//incluimos la tabla con la siguiente clase	
	public static function tableName(){
		
		//retorna el nombre de la clase
		return 'ps_custom_customer';
	}
	
}

?>