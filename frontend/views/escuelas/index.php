<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\EscuelasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Escuelas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="escuelas-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Escuelas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_escuela',
            'nombre_escuela',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
