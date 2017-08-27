<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\attributes;

use app\modules\game\models\game_data\base\BaseAttribute;

/**
 * Class ExoticismFemale
 * @package app\modules\game\models\game_data\attributes
 *
 * Экзотичность
 */
class ExoticismFemale extends BaseAttribute
{
    public function valueNames()
    {
        return [
            0 => 'Не выделяется',
            1 => 'Имеет изюминку',
            2 => 'Загадочный вид',
            3 => 'Экзотична',
            4 => 'Весьма экзотична',
            5 => 'Дико экзотична',
        ];
    }
}