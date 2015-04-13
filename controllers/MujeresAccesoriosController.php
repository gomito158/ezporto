<?php

namespace app\controllers;

class MujeresAccesoriosController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionAccmbolsos()
    {
    	return $this->render('accmbolsos');
    }
    
    public function actionAccmgorras()
    {
    	return $this->render('accmgorras');
    }
    
    public function actionAccmmedias()
    {
    	return $this->render('accmmedias');
    }

    public function actionAccmcintillos()
    {
    	return $this->render('accmcintillos');
    }
    
    public function actionAccmrinoneras()
    {
    	return $this->render('accmrinoneras');
    }
    
}
