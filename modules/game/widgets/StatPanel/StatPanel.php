<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\widgets\StatPanel;


use app\modules\game\models\GameMechanics;
use yii\base\Widget;

class StatPanel extends Widget
{
    public function run()
    {
        return $this->render('index', [
            'gameRegister' => GameMechanics::getInstance()->gameRegister,
        ]);
    }
}