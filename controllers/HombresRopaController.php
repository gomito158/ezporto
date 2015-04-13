<?php

namespace app\controllers;

class HombresRopaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionRhcamisetas(){
    	 
    	return $this->render('rhcamisetas');
    }
    
    public function actionRhcamisillas(){
    
    	return $this->render('rhcamisillas');
    }
    
    public function actionRhbusos(){
    
    	return $this->render('rhbusos');
    }
    
    public function actionRhchaquetas(){
    
    	return $this->render('rhchaquetas');
    }
    
    public function actionRhsudaderas(){
    
    	return $this->render('rhsudaderas');
    }
    
    public function actionRhpantalonetas(){
    
    	return $this->render('rhpantalonetas');
    }
    
    public function actionRhpantalones(){
    
    	return $this->render('rhpantalones');
    }
    
    public function actionRhconjuntos(){
    
    	return $this->render('rhconjuntos');
    }
    
    public function actionRhtbano(){
    
    	return $this->render('rhtbano');
    }
    
    public function actionRhcamequipo(){
    
    	return $this->render('rhcamequipo'); 
    }
}
