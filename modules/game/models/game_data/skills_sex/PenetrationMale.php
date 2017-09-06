<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\skills_sex;


use app\modules\game\models\game_data\base\CommonSkill;

class PenetrationMale extends CommonSkill
{
    public function valueNames()
    {
        return [
            0 => 'Девственник F-',
            1 => 'Пенетрация D-',
            2 => 'Пенетрация C-',
            3 => 'Пенетрация B+',
            4 => 'Пенетрация A+',
            5 => 'Пенетрация S+',
        ];
    }
}