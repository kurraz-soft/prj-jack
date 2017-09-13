<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\controllers;

use app\modules\game\models\GameMechanics;
use app\modules\game\models\libraries\ApprenticesLibrary;
use yii\helpers\Url;

class HomeController extends GameController
{
    public function actionIndex()
    {
        return $this->render('index', [
            'character' => GameMechanics::getInstance()->gameRegister->character,
        ]);
    }

    public function actionApprenticeScreen()
    {
        $this->is_outside = false;

        return $this->render('apprentice_screen',[
            'character' => GameMechanics::getInstance()->gameRegister->character,
        ]);
    }

    public function actionApprenticeTeachScreen()
    {
        $this->is_outside = false;

        return $this->render('apprentice_teach_screen', [

        ]);
    }

    public function actionCharacterScreen()
    {
        $this->is_outside = false;

        return $this->render('character_screen', [
            'character' => GameMechanics::getInstance()->gameRegister->character,
        ]);
    }
}
