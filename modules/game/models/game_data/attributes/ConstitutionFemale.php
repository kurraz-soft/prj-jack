<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\attributes;


use app\modules\game\models\game_data\base\BaseAttribute;

/**
 * Class ConstitutionFemale
 * @package app\modules\game\models\game_data\attributes
 *
 * Телосложение
 */
class ConstitutionFemale extends BaseAttribute
{
    public function valueNames()
    {
        return [
            6 => 'Жирная',
            5 => 'Толстая',
            4 => 'Полная',
            3 => 'Худосочная',
            2 => 'Ядреная',
            1 => 'Стройная',
            0 => 'Тощая',
        ];
    }
}