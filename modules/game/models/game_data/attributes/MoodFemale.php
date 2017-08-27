<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\attributes;


use app\modules\game\models\game_data\base\BaseAttribute;

class MoodFemale extends BaseAttribute
{
    public function valueNames()
    {
        return [
            0 => 'Хроническая депрессия',
            1 => 'Депресия',
            2 => 'Подавлена',
            3 => 'Грустит',
            4 => 'Дуется',
            5 => 'Спокойна',
            6 => 'Умиротворена',
            7 => 'Позитивна',
            8 => 'Довольна',
            9 => 'Весела',
            10 => 'Счастлива',
        ];
    }
}