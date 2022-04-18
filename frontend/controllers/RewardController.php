<?php

namespace frontend\controllers;

use frontend\models\Reward;
use frontend\models\RewardSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RewardController implements the CRUD actions for Reward model.
 */
class RewardController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Reward models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new RewardSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Reward model.
     * @param int $reward_id Reward ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($reward_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($reward_id),
        ]);
    }

    /**
     * Creates a new Reward model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Reward();
        $length = rand(1,3);
        $chars = array_merge(range(0,9));
        shuffle($chars);
        $password = implode(array_slice($chars, 0,$length));
        if ($this->request->isPost) {
            if ($model->load($this->request->post()) ) {
                $model->reward_num = $password;
                $model->save();
                return $this->redirect(['view', 'reward_id' => $model->reward_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Reward model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $reward_id Reward ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($reward_id)
    {
        $model = $this->findModel($reward_id);
        $length = rand(1,3);
        $chars = array_merge(range(0,9));
        shuffle($chars);
        $password = implode(array_slice($chars, 0,$length));
        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            $model->reward_num = $password;
            $model->save();
            return $this->redirect(['view', 'reward_id' => $model->reward_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Reward model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $reward_id Reward ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($reward_id)
    {
        $this->findModel($reward_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Reward model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $reward_id Reward ID
     * @return Reward the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($reward_id)
    {
        if (($model = Reward::findOne(['reward_id' => $reward_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
