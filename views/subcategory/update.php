<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Subcategory */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Subcategory',
]) . ' ' . $model->id_subcategory;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Subcategories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_subcategory, 'url' => ['view', 'id' => $model->id_subcategory]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="subcategory-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
