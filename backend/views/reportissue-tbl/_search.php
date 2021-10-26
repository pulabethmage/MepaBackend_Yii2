<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ReportissueTblSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reportissue-tbl-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'user_nic') ?>

    <?= $form->field($model, 'image_url') ?>

    <?= $form->field($model, 'location_lat') ?>

    <?= $form->field($model, 'location_long') ?>

    <?php // echo $form->field($model, 'polution_type') ?>

    <?php // echo $form->field($model, 'more_info') ?>

    <?php // echo $form->field($model, 'date_time') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
