<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Articulo */

$this->title = 'Update Articulo: ' . $model->id_articulo;
$this->params['breadcrumbs'][] = ['label' => 'Articulos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_articulo, 'url' => ['view', 'id_articulo' => $model->id_articulo, 'id_escuela' => $model->id_escuela, 'id_estados' => $model->id_estados, 'id_categoria' => $model->id_categoria]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="articulo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
