<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\attributes;


use app\modules\game\models\game_data\base\BaseAttribute;

class HealthMale extends BaseAttribute
{
    public function valueNames()
    {
        return [
            0 => 'Цел и невредим',
            1 => 'Легко ранен',
            2 => 'Ранен',
            3 => 'Серьезно ранен',
            4 => 'Тяжело ранен',
            5 => 'Смертельно ранен',
        ];
    }
}