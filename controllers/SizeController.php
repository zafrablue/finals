<?php

namespace app\controllers;
use app\models\Size;
use yii;
use app\models\Tshirt;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\components\AccessRule;


class SizeController extends \yii\web\Controller
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
        $model = new Size;

        if($model->load(Yii::$app->request->post()) && $model->save()){
            $this->redirect(['size/index']);
        }

        return $this->render('create', compact('model'));
    }

    public function actionDelete($id)
    {
        $model = Size::findOne($id);

        Yii::$app->db->createCommand()
        ->delete('tshirt','size_id=:id',[':id'=>$id])
        ->execute();

        $model->delete();
        
        return $this->redirect(['/size/index']);
    }

    public function actionIndex()
    {
        $size = Size::find()->orderBy('size')->all();
        return $this->render('index',['size'=>$size]);
        return $this->render('index');
    }

    public function actionUpdate($id)
    {
        $model = Size::findOne($id);
        return $this->render('update',compact('model'));
    }

    public function actionView($id)
    {
        $model = Size::findOne($id);

        return $this->render('view',compact('model'));
    }

}
