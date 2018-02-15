<?php

namespace app\models;

use Yii;
use app\models\Reservas;
use app\models\ReservasSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ReservasController implements the CRUD actions for Reservas model.
 */
class ReservasController extends Controller
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
     * Lists all Reservas models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ReservasSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Reservas model.
     * @param integer $habitaciones_id
     * @param string $fecha_entrada
     * @param string $fecha_salida
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($habitaciones_id, $fecha_entrada, $fecha_salida)
    {
        return $this->render('view', [
            'model' => $this->findModel($habitaciones_id, $fecha_entrada, $fecha_salida),
        ]);
    }

    /**
     * Creates a new Reservas model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Reservas();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'habitaciones_id' => $model->habitaciones_id, 'fecha_entrada' => $model->fecha_entrada, 'fecha_salida' => $model->fecha_salida]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Reservas model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $habitaciones_id
     * @param string $fecha_entrada
     * @param string $fecha_salida
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($habitaciones_id, $fecha_entrada, $fecha_salida)
    {
        $model = $this->findModel($habitaciones_id, $fecha_entrada, $fecha_salida);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'habitaciones_id' => $model->habitaciones_id, 'fecha_entrada' => $model->fecha_entrada, 'fecha_salida' => $model->fecha_salida]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Reservas model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $habitaciones_id
     * @param string $fecha_entrada
     * @param string $fecha_salida
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($habitaciones_id, $fecha_entrada, $fecha_salida)
    {
        $this->findModel($habitaciones_id, $fecha_entrada, $fecha_salida)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Reservas model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $habitaciones_id
     * @param string $fecha_entrada
     * @param string $fecha_salida
     * @return Reservas the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($habitaciones_id, $fecha_entrada, $fecha_salida)
    {
        if (($model = Reservas::findOne(['habitaciones_id' => $habitaciones_id, 'fecha_entrada' => $fecha_entrada, 'fecha_salida' => $fecha_salida])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
