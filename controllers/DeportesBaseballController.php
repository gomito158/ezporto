<?php

namespace app\controllers;

class DeportesBaseballController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionBsbdepaccesorios()
    {
    	return $this->render('bsbdepaccesorios');
    }
    
    public function actionBsbdepropa()
    {
    	return $this->render('bsbdepropa');
    }
    
    public function actionBsbdepzapatos()
    {
    	return $this->render('bsbdepzapatos');
    }

}
