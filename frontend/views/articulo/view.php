<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Articulo */

$this->title = $model->id_articulo;
$this->params['breadcrumbs'][] = ['label' => 'Articulos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="articulo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_articulo' => $model->id_articulo, 'id_escuela' => $model->id_escuela, 'id_estados' => $model->id_estados, 'id_categoria' => $model->id_categoria], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_articulo' => $model->id_articulo, 'id_escuela' => $model->id_escuela, 'id_estados' => $model->id_estados, 'id_categoria' => $model->id_categoria], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_articulo',
            'nombre_articulo',
            'Url:url',
            'descripcion',
            'puntaje_articulo',
            'ciudad',
            'fecha_creacion',
            'fehca_revision',
            'fecha_publicacion',
            'id_escuela',
            'id_estados',
            'id_categoria',
        ],
    ]) ?>

</div>
