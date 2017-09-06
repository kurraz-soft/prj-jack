<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\skills_sex\sub_skills;


use app\modules\game\helpers\SkillNameHelper;
use app\modules\game\models\game_data\base\CommonSkill;

class Horse extends CommonSkill
{
    protected function baseLabel()
    {
        return 'Жеребец';
    }

    public function valueNames()
    {
        return SkillNameHelper::generateBasic('Жеребец');
    }
}