<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\skills_sex;


use app\modules\game\models\game_data\base\BaseSkill;

class OrgyFemale extends BaseSkill
{
    public function valueNames()
    {
        return [
            0 => 'Групповой секс F-',
            1 => 'Групповой секс D-',
            2 => 'Групповой секс C-',
            3 => 'Групповой секс B+',
            4 => 'Групповой секс A+',
            5 => 'Групповой секс S+',
        ];
    }
}