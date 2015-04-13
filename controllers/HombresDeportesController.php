<?php

namespace app\controllers;

class HombresDeportesController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionDephartmarciales()
    {
    	return $this->render('dephartmarciales');
    }
    
    public function actionDephbaloncesto()
    {
    	return $this->render('dephbaloncesto');
    }
    
    public function actionDephbaseball()
    {
    	return $this->render('dephbaseball');
    }
    
    public function actionDephcamping()
    {
    	return $this->render('dephcamping');
    }
    
    public function actionDephciclismo()
    {
    	return $this->render('dephciclismo');
    }
    
    public function actionDephfutbol()
    {
    	return $this->render('dephfutbol');
    }
    
    public function actionDephgolf()
    {
    	return $this->render('dephgolf');
    }
    
    public function actionDephnatacion()
    {
    	return $this->render('dephnatacion');
    }
    
    public function actionDephpatinaje()
    {
    	return $this->render('dephpatinaje');
    }
    
    public function actionDephrugby()
    {
    	return $this->render('dephrugby');
    }
    
    public function actionDephrunning()
    {
    	return $this->render('dephrunning');
    }
    
    public function actionDephtennis()
    {
    	return $this->render('dephtennis');
    }

}
