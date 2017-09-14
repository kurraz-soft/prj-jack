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

class OralFemale extends BaseSkill implements IAutoSerializable
{
    /**
     * @var OralFemaleSubSkillList
     */
    public $subSkills;

    public function __construct()
    {
        $this->subSkills = new OralFemaleSubSkillList();
    }

    public function valueNames()
    {
        return SkillNameHelper::generateBasic('Оральные ласки');
    }

    protected function getSerializator()
    {
        return new AutoSerializator($this);
    }

    public function serializableParams()
    {
        return [
            'subSkills' => OralFemaleSubSkillList::class,
        ];
    }

    public function getValue()
    {
        $v = 0;
        foreach ($this->subSkills->serializableParams() as $name => $class)
        {
            $v += $this->subSkills->$name->value;
        }

        return $v;
    }

    public function setValue($new_value)
    {
        // TODO: Implement setValue() method.
    }
}