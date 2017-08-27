<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\controllers;


use app\components\Controller;
use app\modules\game\models\GameData;
use app\modules\game\models\GameMechanics;

class SaveGameController extends Controller
{
    public $layout = 'landing';

    public function actionNew($n = null)
    {
        if($n !== null)
        {
            return $this->redirect(['/game', 'new' => $n]);
        }else
        {
            /**
             * @var GameData[]
             */
            $saves = GameData::find()->where(['user_id' => \Yii::$app->user->id])->all();
            $tmp = [];
            foreach ($saves as $s)
            {
                $tmp[$s->n] = $s;
            }
            $saves = $tmp;

            return $this->render('new', [
                'saves' => $saves,
            ]);
        }
    }

    public function actionLoad($n = null)
    {
        if($n !== null)
        {
            GameMechanics::getInstance()->loadGame($n);

            return $this->redirect(['/game']);
        }else
        {
            /**
             * @var GameData[]
             */
            $saves = GameData::find()->where(['user_id' => \Yii::$app->user->id])->all();
            $tmp = [];
            foreach ($saves as $s)
            {
                $tmp[$s->n] = $s;
            }
            $saves = $tmp;

            return $this->render('load', [
                'saves' => $saves,
            ]);
        }
    }
}