<?php

namespace shahimian\cooperations\controllers;

use Yii;
use shahimian\cooperations\models\db\Cooperations;
use shahimian\cooperations\models\db\CooperationsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DefaultController implements the CRUD actions for Cooperations model.
 */
class DefaultController extends Controller
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
     * Lists all Cooperations models.
     * @return mixed
     */
    public function actionIndex()
    {
        (new \shahimian\cooperations\models\Cooperations())->up();
        $searchModel = new CooperationsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Cooperations model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Cooperations model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Cooperations();

        $days = [];
        for($i = 1; $i <= 31; $i++)
            array_push($days, $i);

        $months = [];
        for($i = 1; $i <= 12; $i++)
            array_push($months, $i);
    
        if ($model->load(Yii::$app->request->post())) {
            $model->specialties = json_encode($model->specialties);
            $model->save();
            return $this->redirect(['view', 'id' => $model->cooperationId]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'days' => $days,
                'months' => $months,
            ]);
        }
    }

    /**
     * Updates an existing Cooperations model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $days = [];
        for($i = 1; $i <= 31; $i++)
            array_push($days, $i);

        $months = [];
        for($i = 1; $i <= 12; $i++)
            array_push($months, $i);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->cooperationId]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'days' => $days,
                'months' => $months,
            ]);
        }
    }

    /**
     * Deletes an existing Cooperations model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Cooperations model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Cooperations the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Cooperations::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
