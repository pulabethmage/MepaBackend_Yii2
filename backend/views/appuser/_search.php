<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AppuserSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="app-user-tbl-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'User_id') ?>

    <?= $form->field($model, 'NicNo') ?>

    <?= $form->field($model, 'Password') ?>

    <?= $form->field($model, 'FullName') ?>

    <?= $form->field($model, 'Email') ?>

    <?php // echo $form->field($model, 'MobileNo') ?>

    <?php // echo $form->field($model, 'Address') ?>

    <?php // echo $form->field($model, 'LogStatus') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
