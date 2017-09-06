<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\skills;


use app\modules\game\models\game_data\base\CommonSkill;

/**
 * Class FlagelationMale
 * @package app\modules\game\models\game_data\skills
 *
 * Порка
 */
class FlagelationMale extends CommonSkill
{
    public function valueNames()
    {
        return [
            0 => 'Не умеет пороть F-',
            1 => 'Азы порки D-',
            2 => 'Умеет пороть C-',
            3 => 'Больно порет B+',
            4 => 'Знаток порки A+',
            5 => 'Мастер кнута S+',
        ];
    }
}