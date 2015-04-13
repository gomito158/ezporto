<?php

namespace app\controllers;

class DeportesAcuaticosController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionAcdepaccesorios()
    {
    	return $this->render('acdepaccesorios');
    }
    
    public function actionAcdeptbano()
    {
    	return $this->render('acdeptbano');
    }
    

}
