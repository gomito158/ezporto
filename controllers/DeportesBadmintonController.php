<?php

namespace app\controllers;

class DeportesBadmintonController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionBadepaccesorios()
    {
    	return $this->render('badepaccesorios');
    }
    
    public function actionBadepropa()
    {
    	return $this->render('badepropa');
    }
    
    public function actionBadepzapatos()
    {
    	return $this->render('badepzapatos');
    }
    
}
