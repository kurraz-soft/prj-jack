<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\actions\home\character;


use app\modules\game\models\game_data\Apprentice;
use app\modules\game\models\game_data\base\BaseGameAction;
use app\modules\game\models\game_data\Character;
use app\modules\game\models\game_data\rules\MasterWasher;

class Wash extends BaseGameAction
{
    /**
     * @var BaseGameAction
     */
    public $action;

    public function __construct(Character $character, Apprentice $apprentice, $assistant)
    {
        if($character->home->bath_available)
        {
            if($apprentice->rules->getRule(MasterWasher::class)->getValue() == true)
            {

            }elseif(false)
            {
                //TODO check assistant MasterWasher rule
            }else
            {
                $this->action = new WashAlone($character);
            }
        }else
        {
            $this->action = new WashAloneInTerms($character);
        }
    }

    public function render(): string
    {
        return $this->controller->render($this->getViewFile(),[
            'action' => $this->action,
        ]);
    }
}