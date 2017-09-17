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

class WashAlone extends BaseGameAction
{
    public function getEndRoute(): array
    {
        return ['index'];
    }

    public function __construct(Character $character)
    {
        $this->caption = 'Ванная';
        $this->description = 'Муравейник'; //TODO
        $text = 'Вы удаляетесь в ванную комнату и с удовольствием предаетесь водным процедурам. На такой работе, как ваша, несложно испачкаться кровью, потом, спермой или даже чем похуже, но отмыться всегда можно - главное уделить этому занятию достаточно внимания. Чистота &#45; залог здоровья!';

        $bg = [
            FormatterHelper::imgPath('scene/master_bathing','jpg'),
            FormatterHelper::imgPath('scene/master_bathing_2','jpg'),
            FormatterHelper::imgPath('scene/master_bathing_3','jpg'),
        ];

        $this->slides[] = new GameActionSlide($text,RandomHelper::randArrayValue($bg));
    }
}