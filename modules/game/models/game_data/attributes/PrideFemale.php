<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\attributes;


use app\modules\game\models\game_data\base\BaseAttribute;

class PrideFemale extends BaseAttribute
{
    public function valueNames()
    {
        return [
            0 => 'Высокомерная',
            1 => 'Надменная',
            2 => 'Гордячка',
            3 => 'Брезгливая',
            4 => 'Открытая',
            5 => 'Без комплексов',
        ];
    }
}