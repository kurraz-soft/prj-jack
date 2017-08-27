<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\attributes;


use app\modules\game\models\game_data\base\BaseAttribute;

class Libido extends BaseAttribute
{
    public function valueNames()
    {
        return [
            0 => 'Импотент',
            1 => 'Вялый',
            2 => 'Сексуальный',
            3 => 'Страстный',
            4 => 'Жеребец',
            5 => 'Дикий жеребец',
        ];
    }
}