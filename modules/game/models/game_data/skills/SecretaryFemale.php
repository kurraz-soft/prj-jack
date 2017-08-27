<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\skills;


use app\modules\game\models\game_data\base\BaseSkill;

class SecretaryFemale extends BaseSkill
{
    public function valueNames()
    {
        return [
            0 => 'Не секретарша',
            1 => 'Секретарь D-',
            2 => 'Секретарь C-',
            3 => 'Секретарь B+',
            4 => 'Секретарь A+',
            5 => 'Секретарь S+',
        ];
    }
}