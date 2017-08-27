<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\attributes;


use app\modules\game\models\game_data\base\BaseAttribute;

class Mark extends BaseAttribute
{
    public function valueNames()
    {
        return [
            0 => 'Безвестное клеймо',
            1 => 'Клеймо новичка',
            2 => 'Клеймо профи',
            3 => 'Известное клеймо',
            4 => 'Знаменитое клеймо',
            5 => 'Легендарное клеймо',
        ];
    }
}