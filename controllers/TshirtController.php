<?php

namespace app\controllers;
use app\models\Tshirt;
use app\models\User;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\components\AccessRule;
use yii;


class TshirtController extends \yii\web\Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'ruleConfig' => [
                    'class' => AccessRule::className(),
                ],
                'only' => ['create','update','delete'],
                'rules'=>[
                    [
                        'actions'=>['create','update'],
                        'allow' => true,
                        'roles' => ['@']
                    ],
                    [
                        'actions' => ['delete'],
                        'allow' => true,
                        'roles' => ['@']
                    ]
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],


        ];
    }
    public function actionCreate()
    {
        $model = new Tshirt;

        if($model->load(Yii::$app->request->post()) && $model->save()){
            $this->redirect(['tshirt/index']);
        }

        return $this->render('create', compact('model'));
    }

    public function actionDelete($id)
    {
        $model = Tshirt::findOne($id);

        Yii::$app->db->createCommand()
        ->delete('tshirt','id=:id',[':id'=>$id])
        ->execute();

        $model->delete();
        
        return $this->redirect(['/tshirt/index']);
    }

    public function actionIndex()
    {
        $pro = Tshirt::find()->orderBy('description')->all();
        
        return $this->render('index',['pro'=>$pro]);

    }

    public function actionUpdate($id)
    {
        $model = Tshirt::findOne($id);

            if($model->load(Yii::$app->request->post()) && $model->save()) {
            $this->redirect(['/tshirt/view', 'id'=>$id]);
        }

        return $this->render('update', compact('model'));
    }

    public function actionView($id)
    {
        $model = Tshirt::findOne($id);

        return $this->render('view',compact('model'));
    }

}
