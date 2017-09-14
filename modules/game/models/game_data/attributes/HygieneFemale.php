<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\attributes;


use app\modules\game\models\game_data\base\BaseAttribute;

class HygieneFemale extends BaseAttribute
{
    public function valueNames()
    {
        return [
            0 => 'Покрыта коростой',
            1 => 'Замарашка',
            2 => 'Грязнуля',
            3 => 'Пора мыться',
            4 => 'Чистая',
            5 => 'Чиста и свежа',
        ];
    }
}