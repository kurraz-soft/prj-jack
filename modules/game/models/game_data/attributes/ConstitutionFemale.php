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
            0 => 'Жирная',
            1 => 'Толстая',
            2 => 'Полная',
            3 => 'Худосочная',
            4 => 'Ядреная',
            5 => 'Стройная',
        ];
    }
}