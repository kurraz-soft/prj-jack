<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\skills;


use app\modules\game\models\game_data\base\BaseSkill;

class DancerFemale extends BaseSkill
{
    public function valueNames()
    {
        return [
            0 => 'Не танцовщица',
            1 => 'Танцовщица D-',
            2 => 'Танцовщица C-',
            3 => 'Танцовщица B+',
            4 => 'Танцовщица A+',
            5 => 'Танцовщица S+',
        ];
    }
}