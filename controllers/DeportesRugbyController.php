<?php

namespace app\controllers;

class DeportesRugbyController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionRbdepaccesorios()
    {
    	return $this->render('rbdepaccesorios');
    }
    
    public function actionRbdepropa()
    {
    	return $this->render('rbdepropa');
    }
    
    public function actionRbdepzapatos()
    {
    	return $this->render('rbdepzapatos');
    }

}
