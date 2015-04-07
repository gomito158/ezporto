<?php
//modelo para la recuperaci�n de contrase�a de los usuarios
namespace app\models;
use Yii;
use yii\base\model;

class FormRecoverPass extends model{

	public $email;

	public function rules()
	{
		return [
				['email', 'required', 'message' => 'Campo requerido'],
				['email', 'match', 'pattern' => "/^.{5,80}$/", 'message' => 'M�nimo 5 y m�ximo 80 caracteres'],
				['email', 'email', 'message' => 'Formato no v�lido'],
		];
	}
}
?>