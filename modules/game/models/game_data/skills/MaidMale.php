<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\skills;


use app\modules\game\models\game_data\base\CommonSkill;

class MaidMale extends CommonSkill
{
    public function valueNames()
    {
        return [
            0 => 'Не дворецкий F-',
            1 => 'Лакей D-',
            2 => 'Мажордом C-',
            3 => 'Дворецкий B+',
            4 => 'Стюард A+',
            5 => 'Мастер-стюард S+',
            6 => 'Мастер-стюард S++',
        ];
    }
}