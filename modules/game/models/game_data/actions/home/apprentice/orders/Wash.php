<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\actions\home\apprentice\orders;


use app\modules\game\models\game_data\Person;
use app\modules\game\models\game_data\base\BaseGameAction;
use app\modules\game\models\game_data\Home;

class Wash extends BaseGameAction
{
    /**
     * @var BaseGameAction
     */
    public $action;

    public function __construct(Person $apprentice, Person $assistant, Home $home)
    {
        if($home->bath_available)
        {
            if($assistant && $assistant->assistantBehavior->rules->apprentice_washer->getValue())
            {
                $this->action = new WashWithAssistant($apprentice,$assistant, $home);
            }else
            {
                $this->action = new WashAlone($apprentice, $home);
            }
        }else
        {
            $this->action = new WashAloneInTerms($apprentice,$home);
        }
    }

    public function render(): string
    {
        return $this->controller->render($this->getViewFile(),[
            'action' => $this->action,
        ]);
    }
}