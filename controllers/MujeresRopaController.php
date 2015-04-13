<?php

namespace app\controllers;

class MujeresRopaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionRmcamisas()
    {
    	return $this->render('rmcamisas');
    }
    
    public function actionRmchaquetas()
    {
    	return $this->render('rmchaquetas');
    }
    
    public function actionRmconjuntos()
    {
    	return $this->render('rmconjuntos');
    }
    
    public function actionRmfaldas()
    {
    	return $this->render('rmfaldas');
    }
    
    public function actionRmpantalones()
    {
    	return $this->render('rmpantalones');
    }
    
    public function actionRmshorts()
    {
    	return $this->render('rmshorts');
    }
    
    public function actionRmsudaderas()
    {
    	return $this->render('rmsudaderas');
    }
    
    public function actionRmtbano()
    {
    	return $this->render('rmtbano');
    }
    
    public function actionRmtop()
    {
    	return $this->render('rmtop');
    }
    

}
