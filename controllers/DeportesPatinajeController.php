<?php

namespace app\controllers;

class DeportesPatinajeController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionPatdepaccesorios()
    {
    	return $this->render('patdepaccesorios');
    }
    
    public function actionPatdepropa()
    {
    	return $this->render('patdepropa');
    }
    
    public function actionPatdeppatines()
    {
    	return $this->render('patdeppatines');
    }

}
