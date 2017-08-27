<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\attributes;


use app\modules\game\models\game_data\base\BaseAttribute;

class HygieneMale extends BaseAttribute
{
    public function valueNames()
    {
        return [
            0 => 'Покрыт коростой',
            1 => 'Трубочист',
            2 => 'Грязнуля',
            3 => 'Пора мыться',
            4 => 'Чистый',
            5 => 'Чист и свеж',
        ];
    }
}