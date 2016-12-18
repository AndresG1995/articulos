<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ArticuloSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Articulos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="articulo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Articulo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_articulo',
            'nombre_articulo',
            'Url:url',
            'descripcion',
            'puntaje_articulo',
            // 'ciudad',
            // 'fecha_creacion',
            // 'fehca_revision',
            // 'fecha_publicacion',
            // 'id_escuela',
            // 'id_estados',
            // 'id_categoria',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
