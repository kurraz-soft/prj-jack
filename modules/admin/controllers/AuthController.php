<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 * Date: 18.01.2016
 * Time: 10:18
 */

namespace app\modules\admin\controllers;

use app\components\Controller;
use app\models\LoginForm;
use app\modules\admin\components\AdminController;
use yii\filters\AccessControl;

class AuthController extends AdminController
{
    public $layout = false;

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(\Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }
}