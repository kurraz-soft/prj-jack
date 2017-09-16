<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\rules;


use app\modules\game\models\game_data\base\BaseRule;

class Cook extends BaseRule
{
    public $name = 'Повар';

    public function valueTextTemplates()
    {
        return [
            0 => 'Вы разрешаете своей воспитуемой не тратить силы на ежедневное приготовление еды. У вас на этот счет есть другие планы.',
            1 => 'Вы даете воспитуемой указание готовить вам еду. Теперь, если только у нее найдется достаточно времени и сил, она будет заниматься этим самостоятельно, без ваших дальнейших напоминаний.',
        ];
    }
}