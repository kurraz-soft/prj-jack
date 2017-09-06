<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\skills;


use app\modules\game\models\game_data\base\CommonSkill;

class Nurse extends CommonSkill
{
    public function valueNames()
    {
        return [
            0 => 'Не медсестра',
            1 => 'Медсестра D-',
            2 => 'Медсестра C-',
            3 => 'Медсестра B+',
            4 => 'Медсестра A+',
            5 => 'Медсестра S+',
        ];
    }
}