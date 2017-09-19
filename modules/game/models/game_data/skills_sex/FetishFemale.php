<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\skills_sex;


use app\modules\game\helpers\SkillNameHelper;
use app\modules\game\models\game_data\base\ComplexSkill;
use app\modules\game\models\game_data\serializators\AutoSerializator;

class FetishFemale extends ComplexSkill
{
    /**
     * @var FetishFemaleSubSkillList
     */
    public $subSkills;

    public function __construct()
    {
        $this->subSkills = new FetishFemaleSubSkillList();
    }

    public function valueNames()
    {
        return SkillNameHelper::generateBasic('Фетишизм');
    }

    protected function getSerializator()
    {
        return new AutoSerializator($this);
    }

    public function serializableParams()
    {
        return [
            'subSkills' => FetishFemaleSubSkillList::class,
        ];
    }
}