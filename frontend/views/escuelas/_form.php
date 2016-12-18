<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Escuelas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="escuelas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre_escuela')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
