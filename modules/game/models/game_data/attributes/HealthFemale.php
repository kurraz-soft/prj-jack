<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\attributes;


use app\modules\game\models\game_data\base\BaseAttribute;

class HealthFemale extends BaseAttribute
{
    public function valueNames()
    {
        return [
            0 => 'Умирает',
            1 => 'Немощная',
            2 => 'Слабое здоровье',
            3 => 'Здорова',
            4 => 'Выносливая',
            5 => 'Вынослива как лошадь',
        ];
    }
}