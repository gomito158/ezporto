<?php

namespace app\controllers;

class MujeresDeportesController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionDepmcamping()
    {
    	return $this->render('depmcamping');
    }
    
    public function actionDepmentrenamiento()
    {
    	return $this->render('depmentrenamiento');
    }
    
    public function actionDepmnatacion()
    {
    	return $this->render('depmnatacion');
    }
    
    public function actionDepmrunning()
    {
    	return $this->render('depmrunning');
    }
    
    public function actionDepmtennis()
    {
    	return $this->render('depmtennis');
    }
    
    public function actionDepmyoga()
    {
    	return $this->render('depmyoga');
    }

}
