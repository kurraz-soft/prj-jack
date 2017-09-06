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

class DemonstrationFemale extends BaseSkill implements IAutoSerializable
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

    public function getValue()
    {
        //TODO
        return 0;
    }

    public function setValue($new_value)
    {
        //TODO
    }
}