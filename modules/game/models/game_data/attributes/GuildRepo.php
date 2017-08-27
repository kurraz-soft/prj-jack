<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\attributes;


use app\modules\game\models\game_data\base\BaseAttribute;

class GuildRepo extends BaseAttribute
{
    public function valueNames()
    {
        return [
            0 => 'Козел отпущения',
            1 => 'Груша для битья',
            2 => 'На побегушках',
            3 => 'Важная шишка',
            4 => 'Крышеватель',
            5 => 'Босс гильдии',
        ];
    }
}