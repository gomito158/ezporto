<?php

namespace app\controllers;

class DeportesBaloncestoController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionBaldepaccesorios()
    {
    	return $this->render('baldepaccesorios');
    }
    
    public function actionBaldepropa()
    {
    	return $this->render('baldepropa');
    }
    
    public function actionBaldepzapatos()
    {
    	return $this->render('baldepzapatos');
    }
}
