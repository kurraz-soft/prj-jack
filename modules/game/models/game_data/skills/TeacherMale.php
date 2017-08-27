<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\skills;


use app\modules\game\models\game_data\base\BaseSkill;

class TeacherMale extends BaseSkill
{
    public function valueNames()
    {
        return [
            0 => 'Не учитель F-',
            1 => 'Воспитатель D-',
            2 => 'Наставник C-',
            3 => 'Учитель B+',
            4 => 'Ментор A+',
            5 => 'Мастер-учитель S+',
        ];
    }
}