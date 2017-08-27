<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\attributes;


use app\modules\game\models\game_data\base\BaseAttribute;

/**
 * Class TemperamentFemale
 * @package app\modules\game\models\game_data\attributes
 *
 * Темперамент
 */
class TemperamentFemale extends BaseAttribute
{
    public function valueNames()
    {
        return [
            0 => 'Апатичная',
            1 => 'Холодная',
            2 => 'Сдержаная',
            3 => 'Уравновешенная',
            4 => 'Темпераментная',
            5 => 'Вулкан страстей',
        ];
    }
}