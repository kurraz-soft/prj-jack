<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\body;


use app\modules\game\models\game_data\base\BaseBodyPart;
use app\modules\game\models\game_data\base\INamedValues;

class Hair extends BaseBodyPart implements INamedValues
{
    public $value = 0;

    public function serializableParams()
    {
        return [
            'value' => '',
        ];
    }

    public function valueNames()
    {
        return [
            0 => 'Растрепанные волосы',
            1 => 'Расчесанные волосы',
            2 => 'Помятая прическа',
            3 => 'Гладкая прическа',
            4 => 'Гладкая прическа',
            5 => 'Аккуратная прическа',
            6 => 'Аккуратная прическа',
            7 => 'Стильная прическа',
        ];
    }
}