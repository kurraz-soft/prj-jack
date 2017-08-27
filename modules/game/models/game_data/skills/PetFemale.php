<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\skills;


use app\modules\game\models\game_data\base\BaseSkill;

class PetFemale extends BaseSkill
{
    public function valueNames()
    {
        return [
            0 => 'Не питомец',
            1 => 'Питомец D-',
            2 => 'Питомец C-',
            3 => 'Питомец B+',
            4 => 'Питомец A+',
            5 => 'Питомец S+',
        ];
    }
}