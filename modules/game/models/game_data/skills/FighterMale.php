<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\skills;


use app\modules\game\models\game_data\base\CommonSkill;

class FighterMale extends CommonSkill
{
    public function valueNames()
    {
        return [
            0 => 'Не боец F-',
            1 => 'Оруженосец D-',
            2 => 'Слабый боец C-',
            3 => 'Боец B+',
            4 => 'Воин A+',
            5 => 'Мастер меча S+',
            6 => 'Мастер меча S++',
        ];
    }
}