<?php
//modelo encargado de validar la información enviada por el cliente para realizar el registro
namespace app\models;
use Yii;
use yii\base\Model;

use app\models\Clientes;
use app\models\Users;

//definimos clase de valdiación
class ValidarRegistroCliente extends Model{
	//definimos los atributos a capturs
	public $nombre = null;
	public $email = null;
	public $apellido = null;
	public $cedula = null;
	public $direccion = null;
	public $telefono = null;
	public $celular = null;
	
	//variables de tabla users
	public $username = null;
	public $password = null;
	public $password_repeat = null;
	
	//metodo rules donde se incluyen parametros de validación;retorna array
	public function rules(){
		
		return [
				['nombre','required','message'=>'campo rquerido'],
				['nombre','match','pattern'=>"/^.{3,50}$/",'message'=>'minimos 3 caracteres'],
				['nombre','match','pattern'=>"/^.[a-z]+$/i","message"=>"solo se aceptan letras"],
				//apellidos
				['apellido','required','message'=>'campo rquerido'],
				['apellido','match','pattern'=>"/^.{3,50}$/",'message'=>'minimos 3 caracteres'],
				['apellido','match','pattern'=>"/^.[a-z]+$/i","message"=>"solo se aceptan letras"],
				//email
				['email','required','message'=>'campo email es requerido'],
				['email','match','pattern'=>"/^.{5,80}$/",'message'=>'minimos 5 caracteres'],
				['email','email','message'=>'formato no valido'],
				//incluimos el nuevo metodo de validación ajax 
				['email','email_existe'],
				//cedola
				['cedula','required','message'=>'campo rquerido'],
				['cedula','match','pattern'=>"/^.{3,50}$/",'message'=>'minimos 3 caracteres'],
				['cedula','match','pattern'=>"/^.[0-9a-z]+$/i","message"=>"solo se aceptan numeros y letras"],
				//direccion
				['direccion','required','message'=>'campo rquerido'],
				['direccion','match','pattern'=>"/^.{3,50}$/",'message'=>'minimos 3 caracteres'],
				//telefono
				['telefono','required','message'=>'campo rquerido'],
				['telefono','match','pattern'=>"/^.{3,50}$/",'message'=>'minimos 3 caracteres'],
				['telefono','match','pattern'=>"/^.[0-9]+$/i","message"=>"solo se aceptan numeros"],
				//celular
				['celular','required','message'=>'campo rquerido'],
				['celular','match','pattern'=>"/^.{3,50}$/",'message'=>'minimos 3 caracteres'],
				['celular','match','pattern'=>"/^.[0-9]+$/i","message"=>"solo se aceptan numeros"],
				
				//validación de para la tabla de usuaruiois
				[
					['username','password', 'password_repeat'], 'required', 'message' => 'Campo requerido'],
            		['username', 'match', 'pattern' => "/^.{3,50}$/", 'message' => 'Mínimo 3 y máximo 50 caracteres'],
            		['username', 'match', 'pattern' => "/^[0-9a-z]+$/i", 'message' => 'Sólo se aceptan letras y números'],
            		['username', 'username_existe'],            		
            		['password', 'match', 'pattern' => "/^.{8,16}$/", 'message' => 'Mínimo 6 y máximo 16 caracteres'],
            		['password_repeat', 'compare', 'compareAttribute' => 'password', 'message' => 'Los passwords no coinciden'],
				
		];
	}
	
	public function attributeLabels(){
		
		return [
			'nombre'=>'Nombre:',
			'apellido'=>'Apellidos:',
		    'email' => 'Email:',	
		] ;
	}
	
 public function email_existe($attribute, $params)
    {
   
  //Buscar el email en la tabla
  $table = Users::find()->where("email=:email", [":email" => $this->email]);
   
  //Si el email existe mostrar el error
  if ($table->count() == 1)
  {
                $this->addError($attribute, "El email seleccionado existe");
  }
    }
  
    public function username_existe($attribute, $params)
    {
  //Buscar el username en la tabla
  $tableu = Users::find()->where("username=:username", [":username" => $this->username]);
   
  //Si el username existe mostrar el error
  if ($tableu->count() == 1)
  {
                $this->addError($attribute, "El usuario seleccionado existe");
  }
    }
	
}


?>