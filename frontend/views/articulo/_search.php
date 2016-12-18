<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ArticuloSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="articulo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_articulo') ?>

    <?= $form->field($model, 'nombre_articulo') ?>

    <?= $form->field($model, 'Url') ?>

    <?= $form->field($model, 'descripcion') ?>

    <?= $form->field($model, 'puntaje_articulo') ?>

    <?php // echo $form->field($model, 'ciudad') ?>

    <?php // echo $form->field($model, 'fecha_creacion') ?>

    <?php // echo $form->field($model, 'fehca_revision') ?>

    <?php // echo $form->field($model, 'fecha_publicacion') ?>

    <?php // echo $form->field($model, 'id_escuela') ?>

    <?php // echo $form->field($model, 'id_estados') ?>

    <?php // echo $form->field($model, 'id_categoria') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
