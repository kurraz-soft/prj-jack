<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\skills_sex;


use app\modules\game\helpers\SkillNameHelper;
use app\modules\game\models\game_data\base\BaseSkill;
use app\modules\game\models\game_data\base\IAutoSerializable;
use app\modules\game\models\game_data\serializators\AutoSerializator;

class XenophilyFemale extends BaseSkill implements IAutoSerializable
{
    /**
     * @var XenophilyFemaleSubSkillList
     */
    public $subSkills;

    public function __construct()
    {
        $this->subSkills = new XenophilyFemaleSubSkillList();
    }

    public function valueNames()
    {
        return SkillNameHelper::generateBasic('Ксенофилия');
    }

    protected function getSerializator()
    {
        return new AutoSerializator($this);
    }

    public function serializableParams()
    {
        return [
            'subSkills' => XenophilyFemaleSubSkillList::class,
        ];
    }

    public function getValue()
    {
        // TODO: Implement getValue() method.
    }

    public function setValue($new_value)
    {
        // TODO: Implement setValue() method.
    }
}