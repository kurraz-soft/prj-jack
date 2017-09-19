<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\skills_sex;


use app\modules\game\helpers\SkillNameHelper;
use app\modules\game\models\game_data\base\ComplexSkill;
use app\modules\game\models\game_data\serializators\AutoSerializator;

class PenetrationFemale extends ComplexSkill
{
    /**
     * @var PenetrationFemaleSkillList
     */
    public $subSkills;

    public function __construct()
    {
        $this->subSkills = new PenetrationFemaleSkillList();
    }

    public function valueNames()
    {
        return SkillNameHelper::generateBasic('Пенетрация');
    }

    protected function getSerializator()
    {
        return new AutoSerializator($this);
    }

    public function serializableParams()
    {
        return [
            'subSkills' => PenetrationFemaleSkillList::class,
        ];
    }
}