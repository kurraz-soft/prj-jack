<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\attributes;


use app\modules\game\models\game_data\base\BaseAttribute;

class PersonalityMale extends BaseAttribute
{
    public function valueNames()
    {
        return [
            0 => 'Зомби',
            1 => 'Бесхребетный',
            2 => 'Лузер',
            3 => 'Целеустремленный',
            4 => 'Волевой',
            5 => 'Лидер',
        ];
    }
}