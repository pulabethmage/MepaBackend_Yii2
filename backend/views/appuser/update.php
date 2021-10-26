<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\AppUserTbl */

$this->title = 'Update App User Tbl: ' . $model->User_id;
$this->params['breadcrumbs'][] = ['label' => 'App User Tbls', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->User_id, 'url' => ['view', 'id' => $model->User_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="app-user-tbl-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
