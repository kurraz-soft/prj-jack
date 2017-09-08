<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\skills;


use app\modules\game\models\game_data\base\CommonSkill;

/**
 * Class DancerFemale
 * @package app\modules\game\models\game_data\skills
 *
 * Хореография/Танцы (old callisthenics)
 */
class DancerFemale extends CommonSkill
{
    public function valueNames()
    {
        return [
            0 => 'Не танцовщица',
            1 => 'Танцовщица D-',
            2 => 'Танцовщица C-',
            3 => 'Танцовщица B+',
            4 => 'Танцовщица A+',
            5 => 'Танцовщица S+',
        ];
    }
}