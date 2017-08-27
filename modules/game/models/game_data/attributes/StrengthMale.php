<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\attributes;


use app\modules\game\models\game_data\base\BaseAttribute;

class StrengthMale extends BaseAttribute
{
    public function valueNames()
    {
        return [
            0 => 'Бепомощен',
            1 => 'Задохлик',
            2 => 'Слабак',
            3 => 'Крепкий',
            4 => 'Атлетичный',
            5 => 'Могучий',
        ];
    }
}