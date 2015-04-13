<?php

namespace app\controllers;

class MujeresController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    
 	public function actionZmentrenamiento(){
    	
    	return $this->render('zmentrenamiento');
    }
	
    /* public function actionZhbaloncesto(){
    	 
    	return $this->render('zhbaloncesto');
    } */
    
    /* public function actionZhbaseball(){
    	 
    	return $this->render('zhbaseball');
    } */
    
    public function actionZmcamping(){
    	 
    	return $this->render('zmcamping');
    }
    
   /*  public function actionZhciclismo(){
    	 
    	return $this->render('zhciclismo');
    } */
    
    public function actionZmestilodeportivo(){
    	 
    	return $this->render('zmestilodeportivo');
    }
    
    public function actionZmfutbol(){
    	 
    	return $this->render('zmfutbol');
    }
    
    public function actionZmrunning(){
    	 
    	return $this->render('zmrunning');
    }
    
    public function actionZmtennis(){
    	 
    	return $this->render('zmtennis');
    }

}
