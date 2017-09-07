<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\body;


use app\modules\game\models\game_data\base\BaseBodyPart;
use app\modules\game\models\game_data\base\INamedValues;

class Tattoo extends BaseBodyPart implements INamedValues
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
            0 => 'Татуировок нет',
            1 => 'Маленькая татушка',
            2 => 'Контур татуировки',
            3 => 'Цветная татуировка',
            4 => 'Расчерченное тело',
            5 => 'Изукрашенное тело',
        ];
    }

    public function getStatus()
    {
        return $this->valueNames()[$this->value];
    }
}