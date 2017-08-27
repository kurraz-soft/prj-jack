<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\controllers;


use app\components\Controller;

class AuthController extends Controller
{
    public function actionLogout()
    {
        \Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionRegister()
    {

    }
}