<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\AppUserTbl */

$this->title = 'Create App User Tbl';
$this->params['breadcrumbs'][] = ['label' => 'App User Tbls', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="app-user-tbl-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
