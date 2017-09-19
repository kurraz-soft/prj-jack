<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\actions\home\apprentice\orders;


use app\modules\game\helpers\FormatterHelper;
use app\modules\game\helpers\VarHelper;
use app\modules\game\models\game_data\Person;
use app\modules\game\models\game_data\base\BaseGameAction;
use app\modules\game\models\game_data\GameActionSlide;
use app\modules\game\models\game_data\Home;

class WashWithAssistant extends BaseGameAction
{
    public function __construct(Person $apprentice, $assistant, Home $home)
    {
        $this->caption = 'Ванная';
        $this->description = 'Муравейник'; //TODO home district

        $text = VarHelper::fillStringVars('%{assistant_name}% уводит воспитуемую в ванную комнту и тщательно моет её тело с мылом и мочалкой.',[
            'assistant_name' => 'Изабелла',//TODO assistant
        ]);
        $bg = FormatterHelper::imgPath($apprentice->visuals->lesbo_bath, 'gif');
        $this->slides[] = new GameActionSlide($text,$bg);
    }

    public function getEndRoute(): array
    {
        return ['index'];
    }
}