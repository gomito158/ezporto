<?php
//modelo para la recuperación de contraseña de los usuarios
namespace app\models;
use Yii;
use yii\base\model;

class FormRecoverPass extends model{

	public $email;

	public function rules()
	{
		return [
				['email', 'required', 'message' => 'Campo requerido'],
				['email', 'match', 'pattern' => "/^.{5,80}$/", 'message' => 'Mínimo 5 y máximo 80 caracteres'],
				['email', 'email', 'message' => 'Formato no válido'],
		];
	}
}
?>