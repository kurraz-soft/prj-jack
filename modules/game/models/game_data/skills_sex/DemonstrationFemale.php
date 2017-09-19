<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\skills_sex;


use app\modules\game\helpers\SkillNameHelper;
use app\modules\game\models\game_data\base\ComplexSkill;
use app\modules\game\models\game_data\serializators\AutoSerializator;

class DemonstrationFemale extends ComplexSkill
{
    /**
     * @var DemonstrationFemaleSubSkillList
     */
    public $subSkills;

    public function __construct()
    {
        $this->subSkills = new DemonstrationFemaleSubSkillList();
    }

    function serializableParams()
    {
        return [
            'subSkills' => DemonstrationFemaleSubSkillList::class,
        ];
    }

    protected function getSerializator()
    {
        return new AutoSerializator($this);
    }

    public function valueNames()
    {
        return SkillNameHelper::generateBasic('Демонстрация');
    }
}