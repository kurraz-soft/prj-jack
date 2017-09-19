<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\skills_sex;


use app\modules\game\helpers\SkillNameHelper;
use app\modules\game\models\game_data\base\ComplexSkill;
use app\modules\game\models\game_data\serializators\AutoSerializator;

class OrgyFemale extends ComplexSkill
{
    /**
     * @var OrgyFemaleSkillList
     */
    public $subSkills;

    public function __construct()
    {
        $this->subSkills = new OrgyFemaleSkillList();
    }

    public function valueNames()
    {
        return SkillNameHelper::generateBasic('Групповой секс');
    }

    protected function getSerializator()
    {
        return new AutoSerializator($this);
    }

    public function serializableParams()
    {
        return [
            'subSkills' => OrgyFemaleSkillList::class,
        ];
    }
}