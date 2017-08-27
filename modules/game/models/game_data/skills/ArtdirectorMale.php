<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\skills;


use app\modules\game\models\game_data\base\BaseSkill;

class ArtdirectorMale extends BaseSkill
{
    public function valueNames()
    {
        return [
            0 => 'Вульгарный F-',
            1 => 'Безвкусный D-',
            2 => 'Некультурный C-',
            3 => 'Культурный B+',
            4 => 'Артист A+',
            5 => 'Мастер-артист S+',
            6 => 'Мастер-артист S++',
        ];
    }
}