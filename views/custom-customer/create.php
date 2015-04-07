<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CustomCustomer */

$this->title = Yii::t('app', 'Create Custom Customer');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Custom Customers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="custom-customer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
