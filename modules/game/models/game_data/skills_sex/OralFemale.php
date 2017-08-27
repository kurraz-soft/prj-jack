<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\skills_sex;


use app\modules\game\models\game_data\base\BaseSkill;

class OralFemale extends BaseSkill
{
    public function valueNames()
    {
        return [
            0 => 'Оральные ласки F-',
            1 => 'Оральные ласки D-',
            2 => 'Оральные ласки C-',
            3 => 'Оральные ласки B+',
            4 => 'Оральные ласки A+',
            5 => 'Оральные ласки S+',
        ];
    }
}