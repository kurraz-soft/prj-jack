<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\skills_sex\sub_skills;


use app\modules\game\helpers\SkillNameHelper;
use app\modules\game\models\game_data\base\CommonSkill;

class Mazo extends CommonSkill
{
    public function valueNames()
    {
        return SkillNameHelper::generateBasic('Мазохизм');
    }
}