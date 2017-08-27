<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\skills;


use app\modules\game\models\game_data\base\BaseSkill;

class DominationMale extends BaseSkill
{
    public function valueNames()
    {
        return [
            0 => 'Пассивный F-',
            1 => 'Покорный D-',
            2 => 'Доминантный C-',
            3 => 'Непреклонный B+',
            4 => 'Несгибаемый A+',
            5 => 'Властелин S+',
        ];
    }
}