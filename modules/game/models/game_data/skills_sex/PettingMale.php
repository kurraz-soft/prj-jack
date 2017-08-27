<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\skills_sex;


use app\modules\game\models\game_data\base\BaseSkill;

class PettingMale extends BaseSkill
{
    public function valueNames()
    {
        return [
            0 => 'Неуклюжий F-',
            1 => 'Петтинг D-',
            2 => 'Петтинг C-',
            3 => 'Петтинг B+',
            4 => 'Петтинг A+',
            5 => 'Петтинг S+',
        ];
    }
}