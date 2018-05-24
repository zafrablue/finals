<?php

namespace app\controllers;
use app\models\Color;
use yii;
use app\models\Tshirt;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\components\AccessRule;


class ColorController extends \yii\web\Controller
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
        $model = new Color;

        if($model->load(Yii::$app->request->post()) && $model->save()){
            $this->redirect(['color/index']);
        }

        return $this->render('create', compact('model'));
    }

    public function actionDelete($id)
    {
        $model = Color::findOne($id);

        Yii::$app->db->createCommand()
        ->delete('tshirt','color_id=:id',[':id'=>$id])
        ->execute();

        $model->delete();
        
        return $this->redirect(['/color/index']);
    }

    public function actionIndex()
    {
        $color = Color::find()->orderBy('color')->all();
        return $this->render('index',['color'=>$color]);
        return $this->render('index');
    }

    public function actionUpdate($id)
    {
        $model = Color::findOne($id);

            if($model->load(Yii::$app->request->post()) && $model->save()) {
            $this->redirect(['/color/view', 'id'=>$id]);
        }

        return $this->render('update', compact('model'));
    }

    public function actionView($id)
    {
        $model = Color::findOne($id);

        return $this->render('view',compact('model'));
    }

}
