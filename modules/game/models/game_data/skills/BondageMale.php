<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\skills;


use app\modules\game\models\game_data\base\CommonSkill;

class BondageMale extends CommonSkill
{
    public function valueNames()
    {
        return [
            0 => 'Не умеет вязать F-',
            1 => 'Новичок бондажа D-',
            2 => 'Неплохо вяжет C-',
            3 => 'Умело связывает B+',
            4 => 'Отлично вяжет A+',
            5 => 'Мастер веревки S+',
        ];
    }
}