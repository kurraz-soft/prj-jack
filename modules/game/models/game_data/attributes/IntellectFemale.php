<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\attributes;

use app\modules\game\models\game_data\base\BaseAttribute;

/**
 * Class IntellectFemale
 * @package app\modules\game\models\game_data\attributes
 *
 * Сообразительность
 */
class IntellectFemale extends BaseAttribute
{
    public function valueNames()
    {
        return [
            0 => 'Дура',
            1 => 'Глупая',
            2 => 'Недалекая',
            3 => 'Сообразительная',
            4 => 'Умная',
            5 => 'Интеллектуальная',
        ];
    }
}