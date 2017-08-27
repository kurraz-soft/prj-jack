<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\attributes;


use app\modules\game\models\game_data\base\BaseAttribute;

class Lifestyle extends BaseAttribute
{
    public function valueNames()
    {
        return [
            0 => 'Нищий',
            1 => 'Бедный',
            2 => 'Малоимущий',
            3 => 'Обеспеченный',
            4 => 'Респектабельный',
            5 => 'Патриций',
            6 => 'Негоциант',
        ];
    }
}