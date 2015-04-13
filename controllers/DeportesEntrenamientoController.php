<?php

namespace app\controllers;

class DeportesEntrenamientoController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionEntdepaccesorios()
    {
    	return $this->render('entdepaccesorios');
    }
    
    public function actionEntdepropa()
    {
    	return $this->render('entdepropa');
    }
    
    public function actionEntdepzapatos()
    {
    	return $this->render('entdepzapatos');
    }
    
    public function actionEntdepgym()
    {
    	return $this->render('entdepgym');
    }
    
}
