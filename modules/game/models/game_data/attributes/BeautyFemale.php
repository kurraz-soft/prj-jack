<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\attributes;


use app\modules\game\models\game_data\base\BaseAttribute;

class BeautyFemale extends BaseAttribute
{
    public function valueNames()
    {
        return [
            0 => 'Изуродована',
            1 => 'Дурнушка',
            2 => 'Миловидная',
            3 => 'Привлекательная',
            4 => 'Красавица',
            5 => 'Королева красоты',
        ];
    }
}