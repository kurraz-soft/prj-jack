<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\skills_sex;


use app\modules\game\models\game_data\base\BaseSkill;

class XenophilyFemale extends BaseSkill
{
    public function valueNames()
    {
        return [
            0 => 'Ксенофилия F-',
            1 => 'Ксенофилия D-',
            2 => 'Ксенофилия C-',
            3 => 'Ксенофилия B+',
            4 => 'Ксенофилия A+',
            5 => 'Ксенофилия S+',
        ];
    }
}