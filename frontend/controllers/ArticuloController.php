<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Articulo;
use frontend\models\ArticuloSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ArticuloController implements the CRUD actions for Articulo model.
 */
class ArticuloController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Articulo models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ArticuloSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Articulo model.
     * @param integer $id_articulo
     * @param integer $id_escuela
     * @param integer $id_estados
     * @param integer $id_categoria
     * @return mixed
     */
    public function actionView($id_articulo, $id_escuela, $id_estados, $id_categoria)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_articulo, $id_escuela, $id_estados, $id_categoria),
        ]);
    }

    /**
     * Creates a new Articulo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Articulo();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_articulo' => $model->id_articulo, 'id_escuela' => $model->id_escuela, 'id_estados' => $model->id_estados, 'id_categoria' => $model->id_categoria]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Articulo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id_articulo
     * @param integer $id_escuela
     * @param integer $id_estados
     * @param integer $id_categoria
     * @return mixed
     */
    public function actionUpdate($id_articulo, $id_escuela, $id_estados, $id_categoria)
    {
        $model = $this->findModel($id_articulo, $id_escuela, $id_estados, $id_categoria);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_articulo' => $model->id_articulo, 'id_escuela' => $model->id_escuela, 'id_estados' => $model->id_estados, 'id_categoria' => $model->id_categoria]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Articulo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id_articulo
     * @param integer $id_escuela
     * @param integer $id_estados
     * @param integer $id_categoria
     * @return mixed
     */
    public function actionDelete($id_articulo, $id_escuela, $id_estados, $id_categoria)
    {
        $this->findModel($id_articulo, $id_escuela, $id_estados, $id_categoria)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Articulo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id_articulo
     * @param integer $id_escuela
     * @param integer $id_estados
     * @param integer $id_categoria
     * @return Articulo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_articulo, $id_escuela, $id_estados, $id_categoria)
    {
        if (($model = Articulo::findOne(['id_articulo' => $id_articulo, 'id_escuela' => $id_escuela, 'id_estados' => $id_estados, 'id_categoria' => $id_categoria])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
