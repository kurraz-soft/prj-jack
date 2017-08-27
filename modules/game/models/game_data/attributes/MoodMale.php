<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\attributes;


use app\modules\game\models\game_data\base\BaseAttribute;

class MoodMale extends BaseAttribute
{
    public function valueNames()
    {
        return [
            0 => 'Клиническая депрессия',
            1 => 'Депрессия',
            2 => 'Подавлен',
            3 => 'Недоволен',
            4 => 'Уныл',
            5 => 'Спокоен',
            6 => 'Умиротворен',
            7 => 'Позитивен',
            8 => 'Доволен',
            9 => 'Весел',
            10 => 'Счастлив',
        ];
    }
}