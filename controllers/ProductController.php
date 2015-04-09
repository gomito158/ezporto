<?php

namespace app\controllers;

use Yii;
use app\models\Product;
use app\models\ProductSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use yii\web\UploadedFile;
use app\models\Product_Category;
use app\models\Sections;

/**
 * ProductController implements the CRUD actions for Product model.
 */
class ProductController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Product models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProductSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Product model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Product model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Product();
        $tabla = new Product_Category();
        $msg=null;
        $section = new Sections();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
        	
        	Yii::$app->params['uploadPath'] = Yii::$app->basePath . '/web/uploads/';
        	 
        	if ($model->load(Yii::$app->request->post())) {
        		// get the uploaded file instance. for multiple file uploads
        		// the following data will return an array
        		$image = UploadedFile::getInstance($model, 'imagen1');
        		$image2 = UploadedFile::getInstance($model, 'imagen2');
        		$image3 = UploadedFile::getInstance($model, 'imagen3');
        		$image4 = UploadedFile::getInstance($model, 'imagen4');
        		$image5 = UploadedFile::getInstance($model, 'imagen5');
        	
        		// store the source file name
        		$model->imagen1 = $image->name;
        		$model->imagen2 = $image2->name;
        		$model->imagen3 = $image3->name;
        		$model->imagen4 = $image4->name;
        		$model->imagen5 = $image5->name;
        		
        		$ext = end((explode(".", $image->name)));
        		$ext2 = end((explode(".", $image2->name)));
        		$ext3 = end((explode(".", $image3->name)));
        		$ext4 = end((explode(".", $image4->name)));
        		$ext5 = end((explode(".", $image5->name)));
        	
        		// generate a unique file name
        		$model->imagen1 = Yii::$app->security->generateRandomString().".{$ext}";
        		$model->imagen2 = Yii::$app->security->generateRandomString().".{$ext2}";
        		$model->imagen3 = Yii::$app->security->generateRandomString().".{$ext3}";
        		$model->imagen4 = Yii::$app->security->generateRandomString().".{$ext4}";
        		$model->imagen5 = Yii::$app->security->generateRandomString().".{$ext5}";
        	
        		// the path to save file, you can set an uploadPath
        		// in Yii::$app->params (as used in example below)
        		$path = Yii::$app->params['uploadPath'] . $model->imagen1;
        		$path2 = Yii::$app->params['uploadPath'] . $model->imagen2;
        		$path3 = Yii::$app->params['uploadPath'] . $model->imagen3;
        		$path4 = Yii::$app->params['uploadPath'] . $model->imagen4;
        		$path5 = Yii::$app->params['uploadPath'] . $model->imagen5;
        	
        		if($model->save()){
        			$image->saveAs($path);
        			$image2->saveAs($path2);
        			$image3->saveAs($path3);
        			$image4->saveAs($path4);
        			$image5->saveAs($path5);
        			//return $this->redirect(['view', 'id'=>$model->_id]);
        		} else {
        			// error in saving model
        		}
        		
        		if($model->validate()){
        			//$value = $_POST["Product"]["fk_id_section"];
        			
        			/* $m = implode(" ",(array) $model->fk_id_section);
        			
        			$tabla->fk_id_product = $model->id_product;
        			$tabla->fk_id_section = $m;
        			$tabla->fk_id_category = $model->fk_id_category;
        			$tabla->fk_id_subcategory = $model->fk_id_subcategory;
        			
        			if($tabla->insert()){
        				$msg = "relacion ok";
        			}
        			else{
        			
        				$msg="a ocurrido un error al guardar el registro";
        			} */
        			$tempCount = 0; // needed to ensure the correct index
        			$tempData = "";
        			foreach ($_POST['Product']['fk_id_section'] as $id=>$valor) {
        			
        				/*foreach de categorias
        				 * */
        				foreach ($_POST['Product']['fk_id_category'] as $idc=>$valorc) {
        					
        					//$tabla->fk_id_category = $valorc;
        					//$cat = $tabla->fk_id_category;
        					foreach ($_POST['Product']['fk_id_subcategory'] as $ids=>$valors){
        						
        						$tabla->isNewRecord = true;
        						//$tabla->setPrimaryKey(false);
        						$tabla->fk_id_product = $model->id_product;
        						$tabla->fk_id_section = $valor;
        						//$tabla->fk_id_category = $model->fk_id_category;
        						$tabla->fk_id_category = $valorc;
        						//$tabla->fk_id_subcategory = $model->fk_id_subcategory;
        						$tabla->fk_id_subcategory = $valors;
        						$tabla->save();
        						break;
        					}
        					
        					
        				}
        				
        				/* $tabla->isNewRecord = true;
        				//$tabla->setPrimaryKey(false);
        				$tabla->fk_id_product = $model->id_product;
        				$tabla->fk_id_section = $valor;
        				//$tabla->fk_id_category = $model->fk_id_category;
        				$tabla->fk_id_category = $cat;
        				$tabla->fk_id_subcategory = $model->fk_id_subcategory;
        				$tabla->save(); */
        			}
        		}
        	}
        	
            return $this->redirect(['view', 'id' => $model->id_product,'msg'=>$msg,'fksec'=>$model->fk_id_section]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Product model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $tabla = new Product_Category();
        $msg=null;
        $section = new Sections();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
        	
        	Yii::$app->params['uploadPath'] = Yii::$app->basePath . '/web/uploads/';
        	
        	if ($model->load(Yii::$app->request->post())) {
        	// get the uploaded file instance. for multiple file uploads
        	// the following data will return an array
        	$image = UploadedFile::getInstance($model, 'imagen1');
        	$image2 = UploadedFile::getInstance($model, 'imagen2');
        	$image3 = UploadedFile::getInstance($model, 'imagen3');
        	$image4 = UploadedFile::getInstance($model, 'imagen4');
        	$image5 = UploadedFile::getInstance($model, 'imagen5');
        	 
        	// store the source file name
        	$model->imagen1 = $image->name;
        	$model->imagen2 = $image2->name;
        	$model->imagen3 = $image3->name;
        	$model->imagen4 = $image4->name;
        	$model->imagen5 = $image5->name;
        	
        	$ext = end((explode(".", $image->name)));
        	$ext2 = end((explode(".", $image2->name)));
        	$ext3 = end((explode(".", $image3->name)));
        	$ext4 = end((explode(".", $image4->name)));
        	$ext5 = end((explode(".", $image5->name)));
        	 
        	// generate a unique file name
        	$model->imagen1 = Yii::$app->security->generateRandomString().".{$ext}";
        	$model->imagen2 = Yii::$app->security->generateRandomString().".{$ext2}";
        	$model->imagen3 = Yii::$app->security->generateRandomString().".{$ext3}";
        	$model->imagen4 = Yii::$app->security->generateRandomString().".{$ext4}";
        	$model->imagen5 = Yii::$app->security->generateRandomString().".{$ext5}";
        	 
        	// the path to save file, you can set an uploadPath
        	// in Yii::$app->params (as used in example below)
        	$path = Yii::$app->params['uploadPath'] . $model->imagen1;
        	$path2 = Yii::$app->params['uploadPath'] . $model->imagen2;
        	$path3 = Yii::$app->params['uploadPath'] . $model->imagen3;
        	$path4 = Yii::$app->params['uploadPath'] . $model->imagen4;
        	$path5 = Yii::$app->params['uploadPath'] . $model->imagen5;
        	if($model->save()){
        		$image->saveAs($path);
        		$image2->saveAs($path2);
        		$image3->saveAs($path3);
        		$image4->saveAs($path4);
        		$image5->saveAs($path5);
        		//return $this->redirect(['view', 'id'=>$model->_id]);
        	}
        	}
            return $this->redirect(['view', 'id' => $model->id_product]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Product model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Product model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Product the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Product::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
  
    
    
    
}
