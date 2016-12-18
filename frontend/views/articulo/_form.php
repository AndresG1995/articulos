<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
//use enigmatix\yii2select\Select2;
use kartik\select2\Select2;
use frontend\models\Estados;
use frontend\models\Escuelas;
use frontend\models\Categoria;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;
/* @var $this yii\web\View */
/* @var $model frontend\models\Articulo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="articulo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre_articulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'puntaje_articulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ciudad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha_creacion')->textInput(['value'=> date('d-m-y'), 'disabled'=>true]) ?>


    <?php
        echo '<label class="control-label">Fecha de Revisión</label>';
        echo DatePicker::widget([
            'name' => $form->field($model, 'fehca_revision'),
            'type' => DatePicker::TYPE_COMPONENT_APPEND,
            'value' => '',
            'pluginOptions' => [
                'autoclose'=>true,
                'format' => 'dd-M-yyyy'
            ]
        ]);

    ?>

<?php
    echo '<label class="control-label">Fecha de Publicación</label>';
    echo DatePicker::widget([
        'name' => $form->field($model, 'fecha_publicacion'),
        'type' => DatePicker::TYPE_COMPONENT_APPEND,
        'value' => '',
        'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'dd-M-yyyy'
        ]
    ]);

    ?>



    <?php
        echo $form->field($model, 'id_escuela')->widget(Select2::classname(), [
        'data'  =>ArrayHelper::map(Escuelas::find()->all(), 'id_escuela', 'nombre_escuela'),
        'options' => ['placeholder' => 'Select a state ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
      ]);
       ?>


<?php
    echo $form->field($model, 'id_estados')->widget(Select2::classname(), [
    'data'  => ArrayHelper::map(Estados::find()->all(), 'id_estados', 'nombre_estado'),
    'options' => ['placeholder' => 'Select a state ...'],
    'pluginOptions' => [
        'allowClear' => true
    ],
    ]);

 ?>


<?php
    echo $form->field($model, 'id_categoria')->widget(Select2::classname(), [
    'data'  =>  ArrayHelper::map(Categoria::find()->all(), 'id_categoria', 'nombre_categoria'),
    'options' => ['placeholder' => 'Select a state ...'],
    'pluginOptions' => [
        'allowClear' => true
    ],
    ]);

 ?>



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
