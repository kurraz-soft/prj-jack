<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\attributes;


use app\modules\game\models\game_data\base\BaseAttribute;

/**
 * Class SensualityFemale
 * @package app\modules\game\models\game_data\attributes
 *
 * Нежность/Чувственность
 */
class SensualityFemale extends BaseAttribute
{
    public function valueNames()
    {
        return [
            0 => 'Бесчувственная',
            1 => 'Огрубевшая',
            2 => 'Слегка огрубевшая',
            3 => 'Чувствительная',
            4 => 'Нежная',
            5 => 'Нежная как цветок',
        ];
    }
}