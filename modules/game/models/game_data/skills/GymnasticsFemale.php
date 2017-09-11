<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\skills;


use app\modules\game\helpers\SkillNameHelper;
use app\modules\game\models\game_data\base\CommonSkill;

class GymnasticsFemale extends CommonSkill
{
    public function valueNames()
    {
        return SkillNameHelper::generateBasic('Гимнастика');
    }
}