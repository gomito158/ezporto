<?php

namespace app\controllers;

class DeportesExtremosController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionExtdepaccesorios()
    {
    	return $this->render('extdepaccesorios');
    }
    
    public function actionExtdepropa()
    {
    	return $this->render('extdepropa');
    }
    
    public function actionExtdepzapatos()
    {
    	return $this->render('extdepzapatos');
    }

}
