<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\widgets\CharacterInfo;


use app\modules\game\models\GameMechanics;
use yii\base\Widget;

class CharacterInfo extends Widget
{
    public function run()
    {
        return $this->render('index',[
            'character' => GameMechanics::getInstance()->gameRegister->character,
        ]);
    }
}