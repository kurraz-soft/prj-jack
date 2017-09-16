<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\rules;


use app\modules\game\models\game_data\base\BaseRule;

class Maid extends BaseRule
{
    public $name = 'Горничная';

    public function valueTextTemplates()
    {
        return [
            0 => 'Вы разрешаете своей воспитуемой не тратить силы на поддержание порядка в доме. У вас на этот счет есть другие планы.',
            1 => 'Вы приказываете вашей воспитуемой заботиться о чистоте и порядке в доме. Теперь, если только у нее найдется достаточно времени и сил, она будет заниматься этим самостоятельно, без ваших дальнейших напоминаний.',
        ];
    }
}