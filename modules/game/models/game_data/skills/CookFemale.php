<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\skills;


use app\modules\game\models\game_data\base\CommonSkill;

class CookFemale extends CommonSkill
{
    public function valueNames()
    {
        return [
            0 => 'Не кухарка',
            1 => 'Кухарка D-',
            2 => 'Кухарка C-',
            3 => 'Кухарка B+',
            4 => 'Кухарка A+',
            5 => 'Кухарка S+',
        ];
    }
}