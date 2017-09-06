<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\skills;


use app\modules\game\models\game_data\base\CommonSkill;

class HorseFemale extends CommonSkill
{
    public function valueNames()
    {
        return [
            0 => 'Не лошадка',
            1 => 'Лошадка D-',
            2 => 'Лошадка C-',
            3 => 'Лошадка B+',
            4 => 'Лошадка A+',
            5 => 'Лошадка S+',
        ];
    }
}