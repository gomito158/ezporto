<?php

namespace app\controllers;

class DeportesGolfController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionGlfdepaccesorios()
    {
    	return $this->render('glfdepaccesorios');
    }
    
    public function actionGlfdepropa()
    {
    	return $this->render('glfdepropa');
    }
    
    public function actionGlfdepzapatos()
    {
    	return $this->render('glfdepzapatos');
    }

}
