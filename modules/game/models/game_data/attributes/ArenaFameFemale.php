<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\attributes;


use app\modules\game\models\game_data\base\BaseAttribute;

class ArenaFameFemale extends BaseAttribute
{
    public function valueNames()
    {
        return [
            0 => 'Безвестная',
            1 => 'Известная',
            2 => 'Знаменитость',
            3 => 'Прославленная',
            4 => 'Суперзвезда',
            5 => 'Легенда Рима',
        ];
    }
}