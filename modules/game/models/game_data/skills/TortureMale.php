<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\skills;


use app\modules\game\models\game_data\base\CommonSkill;

class TortureMale extends CommonSkill
{
    public function valueNames()
    {
        return [
            0 => 'Не палач F-',
            1 => 'Плохой палач D-',
            2 => 'Палач C-',
            3 => 'Умелый палач B+',
            4 => 'Страшный палач A+',
            5 => 'Инквизитор S+',
        ];
    }
}