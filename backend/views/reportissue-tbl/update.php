<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ReportissueTbl */

$this->title = 'Update Reportissue Tbl: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Reportissue Tbls', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="reportissue-tbl-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
