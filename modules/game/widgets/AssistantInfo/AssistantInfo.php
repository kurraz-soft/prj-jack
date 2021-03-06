<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\widgets\AssistantInfo;


use app\modules\game\models\GameMechanics;
use yii\base\Widget;

class AssistantInfo extends Widget
{
    /**
     * @var bool
     */
    public $buttons_enabled = false;

    public function run()
    {
        return $this->render('index',[
            'apprentice' => GameMechanics::getInstance()->gameRegister->apprentice_manager->active_assistant,
            'buttons_enabled' => $this->buttons_enabled,
        ]);
    }
}