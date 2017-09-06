<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\skills;


use app\modules\game\models\game_data\base\CommonSkill;

class MaidFemale extends CommonSkill
{
    public function valueNames()
    {
        return [
            0 => 'Не горничная',
            1 => 'Горничная D-',
            2 => 'Горничная C-',
            3 => 'Горничная B+',
            4 => 'Горничная A+',
            5 => 'Горничная S+',
        ];
    }
}