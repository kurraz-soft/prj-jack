<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\skills;


use app\modules\game\models\game_data\base\BaseSkill;

class MusicFemale extends BaseSkill
{
    public function valueNames()
    {
        return [
            0 => 'Не музыкант',
            1 => 'Флейтистка D-',
            2 => 'Гитаристка C-',
            3 => 'Пианистка B+',
            4 => 'Виолончель A+',
            5 => 'Скрипачка S+',
        ];
    }
}