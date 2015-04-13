<?php

namespace app\controllers;

class DeportesRunningController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionRndepaccesorios()
    {
    	return $this->render('rndepaccesorios');
    }
    
    public function actionRndepropa()
    {
    	return $this->render('rndepropa');
    }
    
    public function actionRndepzapatos()
    {
    	return $this->render('rndepzapatos');
    }

}
