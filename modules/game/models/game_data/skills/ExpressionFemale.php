<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\skills;


use app\modules\game\models\game_data\base\BaseSkill;

class ExpressionFemale extends BaseSkill
{
    public function valueNames()
    {
        return [
            0 => 'Не эскорт',
            1 => 'Эскорт D-',
            2 => 'Эскорт C-',
            3 => 'Эскорт B+',
            4 => 'Эскорт A+',
            5 => 'Эскорт S+',
        ];
    }
}