<?php

namespace app\controllers;

use yii\web\Controller;
use yii\web\Session;

class HombresController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionZhentrenamiento(){
    	
    	return $this->render('zhentrenamiento');
    }
	
    public function actionZhbaloncesto(){
    	 
    	return $this->render('zhbaloncesto');
    }
    
    public function actionZhbaseball(){
    	 
    	return $this->render('zhbaseball');
    }
    
    public function actionZhcamping(){
    	 
    	return $this->render('zhcamping');
    }
    
    public function actionZhciclismo(){
    	 
    	return $this->render('zhciclismo');
    }
    
    public function actionZhestilodeportivo(){
    	 
    	return $this->render('zhestilodeportivo');
    }
    
    public function actionZhfutbol(){
    	 
    	return $this->render('zhfutbol');
    }
    
    public function actionZhrunning(){
    	 
    	return $this->render('zhrunning');
    }
    
    public function actionZhtennis(){
    	 
    	return $this->render('zhtennis');
    }
}
