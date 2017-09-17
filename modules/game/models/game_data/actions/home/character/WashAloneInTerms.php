<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\actions\home\character;


use app\modules\game\helpers\FormatterHelper;
use app\modules\game\helpers\RandomHelper;
use app\modules\game\models\game_data\base\BaseGameAction;
use app\modules\game\models\game_data\Character;
use app\modules\game\models\game_data\GameActionSlide;

class WashAloneInTerms extends BaseGameAction
{
    public function __construct(Character $character)
    {
        $this->caption = 'Термы';

        $text = 'Вы отправляетесь в ближайшие термы, где в скоплении местных бедняков оттираете своё тело от пыли и грязи трущоб. Радости от мытья в такой толпе никакой, но хотя бы тёплая вода делает своё дело - спустя некоторое время вы выходите чистым и полностью готовым к дальнейшему унылому прозябанию в этой дыре.';

        $bg = [
            FormatterHelper::imgPath('scene/master_bathing','jpg'),
            FormatterHelper::imgPath('scene/master_bathing_2','jpg'),
            FormatterHelper::imgPath('scene/master_bathing_3','jpg'),
        ];

        $this->slides[] = new GameActionSlide($text,RandomHelper::randArrayValue($bg));
    }
}