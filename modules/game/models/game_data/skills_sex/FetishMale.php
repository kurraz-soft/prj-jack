<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\skills_sex;


use app\modules\game\models\game_data\base\BaseSkill;

class FetishMale extends BaseSkill
{
    public function valueNames()
    {
        return [
            0 => 'Фетишизм F-',
            1 => 'Фетишизм D-',
            2 => 'Фетишизм C-',
            3 => 'Фетишизм B+',
            4 => 'Фетишизм A+',
            5 => 'Фетишизм S+',
        ];
    }
}