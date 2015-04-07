<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CustomCustomer */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Custom Customer',
]) . ' ' . $model->idcedula;
/* $this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Custom Customers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idcedula, 'url' => ['view', 'id' => $model->idcedula]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update'); */
?>
<div class="custom-customer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
