<?php

namespace app\controllers;

class DeportesArtMarcialesController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionArtdepaccesorios()
    {
    	return $this->render('artdepaccesorios');
    }
    
    public function actionArtdepropa()
    {
    	return $this->render('artdepropa');
    }

}
