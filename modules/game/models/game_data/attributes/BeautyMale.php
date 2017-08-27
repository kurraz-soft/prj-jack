<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\attributes;


use app\modules\game\models\game_data\base\BaseAttribute;

class BeautyMale extends BaseAttribute
{
    public function valueNames()
    {
        return [
            0 => 'Отвратительный',
            1 => 'Неприятный',
            2 => 'Невзрачный',
            3 => 'Привлекательный',
            4 => 'Импозантный',
            5 => 'Очаровательный',
        ];
    }
}