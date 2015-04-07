<?php
namespace app\models;

class User extends \yii\base\Object implements \yii\web\IdentityInterface
{
	 
	public $id_user;
	public $idcedula;
	public $username;
	public $email;
	public $password;
	public $authKey;
	public $accessToken;
	public $activate;
	
	//agregamoms variable para el codigo de verificación, en caso de que se olvide el password
	public $verification_code;

	/**
	 * @inheritdoc
	 */
	 
	/* busca la identidad del usuario a través de su $id */

	public static function findIdentity($id_user)
	{
		 
		$user = Users::find()
		->where("activate=:activate", [":activate" => 1])
		->andWhere("id_user=:id_user", ["id_user" => $id_user])
		->one();
		 
		return isset($user) ? new static($user) : null;
	}

	/**
	 * @inheritdoc
	 */
	 
	/* Busca la identidad del usuario a través de su token de acceso */
	public static function findIdentityByAccessToken($token, $type = null)
	{
		 
		$users = Users::find()
		->where("activate=:activate", [":activate" => 1])
		->andWhere("accessToken=:accessToken", [":accessToken" => $token])
		->all();
		 
		foreach ($users as $user) {
			if ($user->accessToken === $token) {
				return new static($user);
			}
		}

		return null;
	}

	/**
	 * Finds user by username
	 *
	 * @param  string      $username
	 * @return static|null
	 */
	 
	/* Busca la identidad del usuario a través del username */
	public static function findByUsername($username)
	{
		$users = Users::find()
		->where("activate=:activate", ["activate" => 1])
		->andWhere("username=:username", [":username" => $username])
		->all();
		 
		foreach ($users as $user) {
			if (strcasecmp($user->username, $username) === 0) {
				return new static($user);
			}
		}

		return null;
	}

	/**
	 * @inheritdoc
	 */
	 
	/* Regresa el id del usuario */
	public function getId()
	{
		return $this->id_user;
	}
	/*retorna la ceu}dula*/
	public function getIdCedula()
	{
		return $this->idcedula;
	}

	/**
	 * @inheritdoc
	 */
	 
	/* Regresa la clave de autenticación */
	public function getAuthKey()
	{
		return $this->authKey;
	}

	/**
	 * @inheritdoc
	 */
	 
	/* Valida la clave de autenticación */
	public function validateAuthKey($authKey)
	{
		return $this->authKey === $authKey;
	}

	/**
	 * Validates password
	 *
	 * @param  string  $password password to validate
	 * @return boolean if password provided is valid for current user
	 */
	public function validatePassword($password)
	{
		/* Valida el password */
		if (crypt($password, $this->password) == $this->password)
		{
			return $password === $password;
		}
	}
	
	/*
	 * Crear los métodos isUserAdmin y isUserSimple en el modelo User.php que nos permitirán establecer los permisos de usuario,
	 *  estos métodos regresarán un valor boolean, también tenemos que agregar la nueva propiedad $role ... 
	 *  
	 *   por defecto esta columna tendrá el valor 1 que es el rol de los usuarios simples o clientes/customer,
	 *    el valor 2 asignará al usuario privilegios de administrador.
	 * */
	public $role;
	
	public static function isUserAdmin($id_user)
	{
		if (Users::findOne(['id_user' => $id_user, 'activate' => '1', 'role' => 2])){
			return true;
		} else {
	
			return false;
		}
	
	}
	
	public static function isUserSimple($id_user)
	{
		if (Users::findOne(['id_user' => $id_user, 'activate' => '1', 'role' => 1])){
			return true;
		} else {
	
			return false;
		}
	}
	
}
?>