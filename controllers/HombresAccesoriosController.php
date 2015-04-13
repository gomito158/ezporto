<?php

namespace app\controllers;

class HombresAccesoriosController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionAcchbolsos()
    {
    	return $this->render('acchbolsos');
    }
    
    public function actionAcchgorras()
    {
    	return $this->render('acchgorras');
    }
    
    public function actionAcchmedias()
    {
    	return $this->render('acchmedias');
    }

}
