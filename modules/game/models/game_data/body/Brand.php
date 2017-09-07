<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\body;


use app\modules\game\models\game_data\base\BaseBodyPart;
use app\modules\game\models\game_data\base\INamedValues;

class Brand extends BaseBodyPart implements INamedValues
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
            0 => 'Нет клейма',
            1 => 'Заклеймена',
            2 => 'Рабская татуировка',
            3 => 'Волшебное клеймо',
            4 => 'Чужое клеймо',
        ];
    }

    public function getStatus()
    {
        return $this->valueNames()[$this->value];
    }
}