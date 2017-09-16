<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\rules;


use app\modules\game\models\game_data\base\BaseRule;

class NoMasturbation extends BaseRule
{
    public $name = 'Не дрочить';

    public function valueTextTemplates()
    {
        return [
            0 => 'Вы позволяете воспитуемой самой решать, когда ей возбуждать себя.',
            1 => 'Вы запрещаете воспитуемой даже пытаться доставить себе удовольствие, пока вы прямо её об этом не попросите. Это не даст ей возможности самой снимать накопившееся возбуждение, а успешное воздержание от рукоблудия немного увеличит её покорность.',
        ];
    }
}