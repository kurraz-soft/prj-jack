<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\widgets\ApprenticeInfo;


use app\modules\game\models\GameMechanics;
use yii\base\Widget;

class ApprenticeInfo extends Widget
{
    public function run()
    {
        return $this->render('index',[
            'apprentice' => GameMechanics::getInstance()->gameRegister->apprentice_manager->active_apprentice,
        ]);
    }
}