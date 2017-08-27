<?php

namespace app\controllers;

use app\components\Controller;
use app\models\User;
use app\modules\game\models\GameData;
use Yii;
use app\models\ContactForm;
use yii\helpers\Url;


class SiteController extends Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        $this->layout = 'landing';

        $reg_user = new User();
        $reg_user->scenario = 'create';

        if(Yii::$app->request->post($reg_user->formName()))
        {
            $reg_user->setAttributes(Yii::$app->request->post($reg_user->formName()));
            $reg_user->name = $reg_user->login;
            if($reg_user->save())
            {
                Yii::$app->session->setFlash('register_success');
                Yii::$app->user->login($reg_user);
                return $this->redirect(Url::home());
            }
        }

        return $this->render('index', [
            'reg_user' => $reg_user,
            'has_saves' => GameData::find()->where(['user_id' => Yii::$app->user->id])->count(),
        ]);
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionAbout()
    {
        return $this->render('about');
    }
}
