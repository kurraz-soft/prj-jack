<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\attributes;


use app\modules\game\models\game_data\base\BaseAttribute;

/**
 * Class TemperFemale
 * @package app\modules\game\models\game_data\attributes
 *
 * Характер
 */
class TemperFemale extends BaseAttribute
{
    public function valueNames()
    {
        return [
            0 => 'Безвольная',
            1 => 'Бесхребетная',
            2 => 'Слабохарактерная',
            3 => 'Самостоятельная',
            4 => 'Твердый характер',
            5 => 'Волевая',
        ];
    }
}