<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sections */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Sections',
]) . ' ' . $model->id_section;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sections'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_section, 'url' => ['view', 'id' => $model->id_section]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="sections-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
