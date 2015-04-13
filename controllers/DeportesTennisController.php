<?php

namespace app\controllers;

class DeportesTennisController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionTndepaccesorios()
    {
    	return $this->render('tndepaccesorios');
    }
    
    public function actionTndepropa()
    {
    	return $this->render('tndepropa');
    }
    
    public function actionTndepzapatos()
    {
    	return $this->render('tndepzapatos');
    }

}
