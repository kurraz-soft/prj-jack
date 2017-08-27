<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\skills;


use app\modules\game\models\game_data\base\BaseSkill;

class MageMale extends BaseSkill
{
    public function valueNames()
    {
        return [
            0 => 'Не маг F-',
            1 => 'Маг-ученик D-',
            2 => 'Слабый маг C-',
            3 => 'Маг B+',
            4 => 'Магистр A+',
            5 => 'Архимаг S+',
            6 => 'Архимаг S++',
        ];
    }
}