<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\skills_sex;


use app\modules\game\models\game_data\base\BaseSkill;

class DemonstrationFemale extends BaseSkill
{
    public function valueNames()
    {
        return [
            0 => 'Демонстрация F-',
            1 => 'Демонстрация D-',
            2 => 'Демонстрация C-',
            3 => 'Демонстрация B+',
            4 => 'Демонстрация A+',
            5 => 'Демонстрация S+',
        ];
    }
}