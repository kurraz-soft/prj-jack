<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\skills;


use app\modules\game\models\game_data\base\CommonSkill;

class VocalFemale extends CommonSkill
{
    public function valueNames()
    {
        return [
            0 => 'Не певица',
            1 => 'Певица D-',
            2 => 'Певица C-',
            3 => 'Певица B+',
            4 => 'Певица A+',
            5 => 'Певица S+',
        ];
    }
}