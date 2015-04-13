<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;


//se incluye clase de validación del formulario de registro
use app\models\ValidarRegistroCliente;

//agregamos modelos de validación ajax
use yii\widgets\ActiveForm;
use yii\web\Response;
//agregamos clases de clientes y de usuarios
use app\models\Clientes;
use app\models\Users;

//agregamos clases para la rest y recover de password
use yii\web\Session;
use app\models\FormRecoverPass;
use app\models\FormResetPass;
//agregamos el modelo users para el manejo de privilegios: 0 customer - 1 administrator
use app\models\User;
use yii\helpers\Url;

class SiteController extends Controller
{
	
	/*
	 * aca agregamos Código para el controlador con la acción Register que utilizaremos
	 * para registrar al usuario, la acción Confirm que permitirá activar al usuario cuando
	 * haga click en el enlace adjunto en el correo electrónico y
	 * el método privado randKey($str, $long) para generar claves aleatorias para las
	 * columnas authKey y accessToken
	 *
	 * */
	
	private function randKey($str='', $long=0)
	{
		$key = null;
		$str = str_split($str);
		$start = 0;
		$limit = count($str)-1;
		for($x=0; $x<$long; $x++)
		{
		$key .= $str[rand($start, $limit)];
		}
		return $key;
	}
	
	public function actionConfirm()
	{
		$table_u = new Users;
		if (Yii::$app->request->get())
		{
	
			//Obtenemos el valor de los parámetros get
			$id_user = Html::encode($_GET["id"]);
			$authKey = $_GET["authKey"];
			 
			if ((int) $id_user)
			{
				//Realizamos la consulta para obtener el registro
				$model = $table_u
				->find()
				->where("id_user=:id_user", [":id_user" => $id_user])
				->andWhere("authKey=:authKey", [":authKey" => $authKey]);
	
				//Si el registro existe
				if ($model->count() == 1)
				{
					$activar = Users::findOne($id_user);
					$activar->activate = 1;
					if ($activar->update())
					{
						echo "Enhorabuena registro llevado a cabo correctamente, redireccionando ...";
						//echo "<meta http-equiv='refresh' content='8; ".Url::toRoute("site/login")."'>";
					}
					else
					{
						echo "Ha ocurrido un error al realizar el registro, redireccionando ...";
						//echo "<meta http-equiv='refresh' content='8; ".Url::toRoute("site/login")."'>";
					}
				}
				else //Si no existe redireccionamos a login
				{
					return $this->redirect(["site/login"]);
				}
			}
			else //Si id no es un número entero redireccionamos a login
			{
				return $this->redirect(["site/login"]);
			}
		}
	}
	
	//se crea nueva acción
	public function actionClientes($mensaje=null){
		//accion encargada de conectar con la vista de registro de clientes
		$model = new ValidarRegistroCliente();
		//variable de notificación si se envio correcto el formulario
		$msg=null;
		//validamos que el formulario sea enviado
		if($model->load(Yii::$app->request->post()) && Yii::$app->request->isAjax){
			Yii::$app->response->format = Response::FORMAT_JSON;
			return ActiveForm::validate($model);
		}
		if($model->load(Yii::$app->request->post())){
			//validamos que el fomrulario sea valido
			if($model->validate()){
	
				//instanciamos
				$table = new Clientes;
				$table_u = new Users;
				//datos de cliente
				$cedula = $model->cedula;
				$table->idcedula = $cedula;
				$table->nombre = $model->nombre;
				$table->apellido = $model->apellido;
				$table->direccion = $model->direccion;
				$table->email = $model->email;
				$table->telefono = $model->telefono;
				$table->celular = $model->celular;
				//datos de usuario
				$idcedula = $model->cedula;
				$table_u->idcedula = $idcedula;
				$table_u->username = $model->username;
				$table_u->email = $model->email;
				//Encriptamos el password
				$table_u->password = crypt($model->password, Yii::$app->params["salt"]);
				//Creamos una cookie para autenticar al usuario cuando decida recordar la sesión, esta misma
				//clave será utilizada para activar el usuario
				$table_u->authKey = $this->randKey("abcdef0123456789", 200);
				//Creamos un token de acceso único para el usuario
				$table_u->accessToken = $this->randKey("abcdef0123456789", 200);
				$table_u->activate = '1';
				
				if($table->insert()){
						
					//si inserta, limpia los campos	
					$model->nombre = NULL;
					$model->apellido = NULL;
					$model->cedula = NULL;
					$model->direccion = NULL;
					$model->email = NULL;
					$model->telefono = NULL;
					$model->celular = NULL;
					$model->username = null;
					$model->password = null;
					$model->password_repeat = null;
						
					$msg = "ok cliente";
				
				}
				else{
				
					$msg="a ocurrido un error al guardar el registro";
				}
					
				//Si el registro es guardado correctamente
				if ($table_u->insert())
				{
					//Nueva consulta para obtener el id del usuario
					//Para confirmar al usuario se requiere su id y su authKey
					$user = $table_u->find()->where(["email" => $model->email])->one();
					/* $id_user = urlencode($user['id_user']);
					$authKey = urlencode($user['authKey']); */
					$id_user = $user['id_user'];
					$authKey = $user['authKey'];
					 
					$subject = "Confirmar registro";
					$body = "<h1>Haga click en el siguiente enlace para finalizar tu registro</h1>";
					$body .= "<a href='localhost/ezporto/web/index.php?r=site/confirm&id=".$id_user."&authKey=".$authKey."'>Confirmar</a>";
					 
					
					
					//Enviamos el correo
					/* Yii::$app->mailer->compose()
					->setFrom([Yii::$app->params["adminEmail"] => Yii::$app->params["title"]])
					->setTo($user->email)					
					->setSubject($subject)
					->setHtmlBody($body)
					->send(); */
					//Enviamos el correo
					Yii::$app->mailer->compose()
					->setTo($model->email)
					->setFrom([Yii::$app->params["adminEmail"] => Yii::$app->params["title"]])
					->setSubject($subject)
					->setHtmlBody($body)
					->send();
				
					$model->nombre = NULL;
					$model->apellido = NULL;
					$model->cedula = NULL;
					$model->direccion = NULL;
					$model->email = NULL;
					$model->telefono = NULL;
					$model->celular = NULL;
					$model->username = null;
					$model->password = null;
					$model->password_repeat = null;
				
					$msg = "Enhorabuena, ahora sólo falta que confirmes tu registro en tu cuenta de correo";
				}
				else
				{
					$msg = "Ha ocurrido un error al llevar a cabo tu registro";
				}
	
				
	
			}
			else{
				
				$model->getErrors();
			}
		}
	
		return $this->render("clientes",['model'=>$model,'msg'=>$msg]);
			
	}
	
	
	//************************************************************inicio reset y recover de password*******************************************
	public function actionRecoverpass()
	{
		//Instancia para validar el formulario
		$model = new FormRecoverPass;
	
		//Mensaje que será mostrado al usuario en la vista
		$msg = null;
	
		if ($model->load(Yii::$app->request->post()))
		{
			if ($model->validate())
			{
				//Buscar al usuario a través del email
				$table = Users::find()->where("email=:email", [":email" => $model->email]);
	
				//Si el usuario existe
				if ($table->count() == 1)
				{
					//Crear variables de sesión para limitar el tiempo de restablecido del password
					//hasta que el navegador se cierre
					$session = new Session;
					$session->open();
					 
					//Esta clave aleatoria se cargará en un campo oculto del formulario de reseteado
					$session["recover"] = $this->randKey("abcdef0123456789", 200);
					$recover = $session["recover"];
					 
					//También almacenaremos el id del usuario en una variable de sesión
					//El id del usuario es requerido para generar la consulta a la tabla users y
					//restablecer el password del usuario
					$table = Users::find()->where("email=:email", [":email" => $model->email])->one();
					$session["id_recover"] = $table->id_user;
					 
					//Esta variable contiene un número hexadecimal que será enviado en el correo al usuario
					//para que lo introduzca en un campo del formulario de reseteado
					//Es guardada en el registro correspondiente de la tabla users
					$verification_code = $this->randKey("abcdef0123456789", 8);
					//Columna verification_code
					$table->verification_code = $verification_code;
					//Guardamos los cambios en la tabla users
					$table->save();
					 
					//Creamos el mensaje que será enviado a la cuenta de correo del usuario
					$subject = "Recuperar password";
					$body = "<p>Copie el siguiente código de verificación para restablecer su password ... ";
					$body .= "<strong>".$verification_code."</strong></p>";
					$body .= "<p><a href='http://yii.local/index.php?r=site/resetpass'>Recuperar password</a></p>";
	
					//Enviamos el correo
					Yii::$app->mailer->compose()
					->setTo($model->email)
					->setFrom([Yii::$app->params["adminEmail"] => Yii::$app->params["title"]])
					->setSubject($subject)
					->setHtmlBody($body)
					->send();
					 
					//Vaciar el campo del formulario
					$model->email = null;
					 
					//Mostrar el mensaje al usuario
					$msg = "Le hemos enviado un mensaje a su cuenta de correo para que pueda resetear su password";
				}
				else //El usuario no existe
				{
					$msg = "Ha ocurrido un error";
				}
			}
			else
			{
				$model->getErrors();
			}
		}
		return $this->render("recoverpass", ["model" => $model, "msg" => $msg]);
	}
	
	public function actionResetpass()
	{
		//funcion para resetear el password
		//Instancia para validar el formulario
		$model = new FormResetPass;
	
		//Mensaje que será mostrado al usuario
		$msg = null;
	
		//Abrimos la sesión
		$session = new Session;
		$session->open();
	
		//Si no existen las variables de sesión requeridas lo expulsamos a la página de inicio
		if (empty($session["recover"]) || empty($session["id_recover"]))
		{
			return $this->redirect(["site/index"]);
		}
		else
		{
			 
			$recover = $session["recover"];
			//El valor de esta variable de sesión la cargamos en el campo recover del formulario
			//este campo esta oculto
			$model->recover = $recover;
			 
			//Esta variable contiene el id del usuario que solicitó restablecer el password
			//La utilizaremos para realizar la consulta a la tabla users
			$id_recover = $session["id_recover"];
			 
		}
	
		//Si el formulario es enviado para resetear el password
		if ($model->load(Yii::$app->request->post()))
		{
			if ($model->validate())
			{
				//Si el valor de la variable de sesión recover es correcta
				if ($recover == $model->recover)
				{
					//Preparamos la consulta para resetear el password, requerimos el email, el id
					//del usuario que fue guardado en una variable de session y el código de verificación
					//que fue enviado en el correo al usuario y que fue guardado en el registro
					$table = Users::findOne(["email" => $model->email, "id_user" => $id_recover, "verification_code" => $model->verification_code]);
					 
					//Encriptar el password
					$table->password = crypt($model->password, Yii::$app->params["salt"]);
					 
					//Si la actualización se lleva a cabo correctamente
					if ($table->save())
					{
	
						//Destruir las variables de sesión
						$session->destroy();
	
						//Vaciar los campos del formulario
						$model->email = null;
						$model->password = null;
						$model->password_repeat = null;
						$model->recover = null;
						$model->verification_code = null;
	
						$msg = "Enhorabuena, password reseteado correctamente, redireccionando a la página de login ...";
						$msg .= "<meta http-equiv='refresh' content='5; ".Url::toRoute("site/login")."'>";
					}
					else
					{
						$msg = "Ha ocurrido un error";
					}
					 
				}
				else
				{
					$model->getErrors();
				}
			}
		}
	
		return $this->render("resetpass", ["model" => $model, "msg" => $msg]);
	
	}
	//********************************************************fin reset y recover password*****************************************************
	
	//**********************************************************funciones usuario simple/cliente/customer**************************************
	public function actionUser(){
		
		//retornamos la vista user
		return $this->render('user');
	}
	//*******************************************************fin funciones usuario simple/cliente/customer**************************************
	//**********************************************************funciones usuario Administrator/administrador**************************************
	public function actionAdmin(){
	
		//retornamos la vista admin
		return $this->render('admin');
	}
	//*******************************************************fin funciones usuario Administrator/administrador**************************************

	public function actionRequest(){
		$mensaje = null;
		//obtenemos datos del formulario
		if(isset($_REQUEST["nombre"])){
			
			$mensaje = "se ha enviado el nombre:".$_REQUEST["nombre"];
		}
		$this->redirect(["site/clientes","mensaje"=>$mensaje]);
	}
	
	public function behaviors()	{
	    return [
	        'access' => [
	            'class' => AccessControl::className(),
	        		//acciones que seran afectadas para controlar el acceso
	            'only' => ['logout', 'user', 'admin'],
	            'rules' => [
	                [
	                	//aca se defienen los roles para cada usuario, en este aso para EL ADMIN	=> PERMISOS 'logout', 'admin'
	                    //El administrador tiene permisos sobre las siguientes acciones
	                    'actions' => ['logout', 'admin'],
	                    //Esta propiedad establece que tiene permisos
	                    'allow' => true,
	                    //Usuarios autenticados, el signo ? es para invitados
	                    'roles' => ['@'],
	                    //Este método nos permite crear un filtro sobre la identidad del usuario
	                    //y así establecer si tiene permisos o no
	                    'matchCallback' => function ($rule, $action) {
	                        //Llamada al método que comprueba si es un administrador
	                        return User::isUserAdmin(Yii::$app->user->identity->id_user);
	                    },
	                ],
	                [
	                		/*esta seccion es para los usuarios customer/clientes/simple
	                		 * tienen acceso a 'logout', 'user'
	                		 * */
	                   //Los usuarios simples tienen permisos sobre las siguientes acciones
	                   'actions' => ['logout', 'user'],
	                   //Esta propiedad establece que tiene permisos
	                   'allow' => true,
	                   //Usuarios autenticados, el signo ? es para invitados
	                   'roles' => ['@'],
	                   //Este método nos permite crear un filtro sobre la identidad del usuario
	                   //y así establecer si tiene permisos o no
	                   'matchCallback' => function ($rule, $action) {
	                      //Llamada al método que comprueba si es un usuario simple
	                      return User::isUserSimple(Yii::$app->user->identity->id_user);
	                  },
	               ],
	            ],
	        ],
	 //Controla el modo en que se accede a las acciones, en este ejemplo a la acción logout
	 //sólo se puede acceder a través del método post
	        'verbs' => [
	            'class' => VerbFilter::className(),
	            'actions' => [
	                'logout' => ['post'],
	            ],
	        ],
	    ];
	}

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }


    public function actionLogin()
    {
    	if (!\Yii::$app->user->isGuest) {
    
    		if (User::isUserAdmin(Yii::$app->user->identity->id))
    		{
    			return $this->redirect(["site/admin"]);
    		}
    		else
    		{
    			return $this->redirect(["site/user"]);
    		}
    	}
    
    	$model = new LoginForm();
    	if ($model->load(Yii::$app->request->post()) && $model->login()) {
    
    		if (User::isUserAdmin(Yii::$app->user->identity->id))
    		{
    			return $this->redirect(["site/admin"]);
    		}
    		else
    		{
    			return $this->redirect(["site/user"]);
    		}
    
    	} else {
    		return $this->render('login', [
    				'model' => $model,
    		]);
    	}
    }
    

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    public function actionAbout()
    {
        return $this->render('about');
    }
    
    public function actionConstruction()
    {
    	return $this->render('construction');
    }
    
   

    

   }
