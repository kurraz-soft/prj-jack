<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\skills;


use app\modules\game\models\game_data\base\BaseSkill;

class GladiatorFemale extends BaseSkill
{
    public function valueNames()
    {
        return [
            0 => 'Не гладиатор',
            1 => 'Гладиатор D-',
            2 => 'Гладиатор C-',
            3 => 'Гладиатор B+',
            4 => 'Гладиатор A+',
            5 => 'Гладиатор S+',
        ];
    }
}