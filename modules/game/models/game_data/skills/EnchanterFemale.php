<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\skills;


use app\modules\game\models\game_data\base\BaseSkill;

class EnchanterFemale extends BaseSkill
{
    public function valueNames()
    {
        return [
            0 => 'Не чародейка',
            1 => 'Чародейка D-',
            2 => 'Чародейка C-',
            3 => 'Чародейка B+',
            4 => 'Чародейка A+',
            5 => 'Чародейка S+',
        ];
    }
}