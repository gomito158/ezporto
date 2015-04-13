<?php

namespace app\controllers;

class DeportesCiclismoController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionCicldepaccesorios()
    {
    	return $this->render('cicldepaccesorios');
    }
    
    public function actionCicldepropa()
    {
    	return $this->render('cicldepropa');
    }
    
    public function actionCicldepzapatos()
    {
    	return $this->render('cicldepzapatos');
    }

}
