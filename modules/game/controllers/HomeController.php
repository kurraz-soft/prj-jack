<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\controllers;

use app\modules\game\models\game_data\actions\home\apprentice\talk\AskAboutPastAction;
use app\modules\game\models\GameMechanics;
use app\modules\game\models\libraries\ApprenticesLibrary;
use yii\helpers\Url;

class HomeController extends GameController
{
    public function actionIndex()
    {
        $this->character_panel_active = true;

        return $this->render('index', [
            'character' => $this->gameRegister->character,
            'apprentice' => $this->gameRegister->apprentice_manager->active_apprentice,
        ]);
    }

    public function actionApprenticeScreen()
    {
        $this->is_outside = false;

        return $this->render('apprentice_screen',[
            'character' => $this->gameRegister->character,
            'apprentice' => $this->gameRegister->apprentice_manager->active_apprentice,
        ]);
    }

    public function actionApprenticeTeachScreen()
    {
        $this->is_outside = false;

        return $this->render('apprentice_teach_screen', [
            'apprentice' => $this->gameRegister->apprentice_manager->active_apprentice,
        ]);
    }

    public function actionCharacterScreen()
    {
        $this->is_outside = false;

        return $this->render('character_screen', [
            'character' => GameMechanics::getInstance()->gameRegister->character,
        ]);
    }

    public function actionApprenticeTalkAskAboutPast()
    {
        $this->is_outside = false;

        $action = new AskAboutPastAction(
            GameMechanics::getInstance()->gameRegister->apprentice_manager->active_apprentice,
            GameMechanics::getInstance()->gameRegister->character->home
        );

        return $action->setController($this)->render();
    }
}
