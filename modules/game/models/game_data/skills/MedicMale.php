<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\skills;


use app\modules\game\models\game_data\base\CommonSkill;

class MedicMale extends CommonSkill
{
    public function valueNames()
    {
        return [
            0 => 'Не врач F-',
            1 => 'Медбрат D-',
            2 => 'Плохой врач C-',
            3 => 'Врач B+',
            4 => 'Хороший врач A+',
            5 => 'Врач-хирург S+',
            6 => 'Врач-хирург S++',
        ];
    }
}