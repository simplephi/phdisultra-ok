<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\KabupatenSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kabupaten-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kabupaten_id') ?>

    <?= $form->field($model, 'provinsi_id') ?>

    <?= $form->field($model, 'kabupaten_kode') ?>

    <?= $form->field($model, 'kabupaten_nama') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
