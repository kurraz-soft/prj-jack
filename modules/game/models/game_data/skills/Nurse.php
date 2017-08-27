<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\skills;


use app\modules\game\models\game_data\base\BaseSkill;

class Nurse extends BaseSkill
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