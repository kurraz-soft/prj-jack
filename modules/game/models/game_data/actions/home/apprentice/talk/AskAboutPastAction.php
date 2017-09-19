<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\actions\home\apprentice\talk;


use app\modules\game\models\game_data\base\BaseGameAction;
use app\modules\game\models\game_data\GameActionSlide;
use app\modules\game\models\game_data\Person;
use app\modules\game\models\game_data\Home;

class AskAboutPastAction extends BaseGameAction
{
    public function __construct(Person $apprentice, Home $home)
    {
        $this->caption = 'Небольшая комната'; //TODO replace with home name
        $this->description = 'Муравейник'; //TODO replace with home district
        $this->info = '';

        $this->slides[] = new GameActionSlide(
            ' - ' . $apprentice->descriptions->world,
            $home->getImgHall(),
            $apprentice->name,
            $apprentice->visuals->fullimage
        );
        $this->slides[] = new GameActionSlide(
            ' - ' .$apprentice->descriptions->family,
            $home->getImgHall(),
            $apprentice->name,
            $apprentice->visuals->fullimage
        );
        $this->slides[] = new GameActionSlide(
            ' - ' . $apprentice->descriptions->occupation,
            $home->getImgHall(),
            $apprentice->name,
            $apprentice->visuals->fullimage
        );
    }

    public function getEndRoute(): array
    {
        return ['index'];
    }
}