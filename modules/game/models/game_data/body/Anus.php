<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\body;


use app\modules\game\models\game_data\base\BaseBodyPart;
use app\modules\game\models\game_data\base\INamedValues;

class Anus extends BaseBodyPart implements INamedValues
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
            0 => 'Зажатый анус',
            1 => 'Тугой анус',
            2 => 'Плотный анус',
            3 => 'Разработанный анус',
            4 => 'Эластичный анус',
            5 => 'Пластичный анус',
        ];
    }

    public function getStatus()
    {
        return $this->valueNames()[$this->value];
    }
}