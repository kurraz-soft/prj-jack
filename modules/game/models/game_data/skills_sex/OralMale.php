<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\skills_sex;


use app\modules\game\models\game_data\base\CommonSkill;

class OralMale extends CommonSkill
{
    public function valueNames()
    {
        return [
            0 => 'Нецелованный F-',
            1 => 'Оральный секс D-',
            2 => 'Оральный секс C-',
            3 => 'Оральный секс B+',
            4 => 'Оральный секс A+',
            5 => 'Оральный секс S+',
        ];
    }
}