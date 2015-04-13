<?php

namespace app\controllers;

class DeportesFutbolController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionFdepaccesorios()
    {
    	return $this->render('fdepaccesorios');
    }
    
    public function actionFdepguayos()
    {
    	return $this->render('fdepguayos');
    }
    
    public function actionFdepropa()
    {
    	return $this->render('fdepropa');
    }
    
    public function actionFdepselcolombia()
    {
    	return $this->render('fdepselcolombia');
    }
    
    public function actionFdepuniformes()
    {
    	return $this->render('fdepuniformes');
    }

}
