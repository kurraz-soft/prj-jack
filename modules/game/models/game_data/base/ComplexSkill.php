<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\base;


abstract class ComplexSkill extends BaseSkill implements IAutoSerializable
{
    /**
     * @var BaseGameDataList
     */
    public $subSkills;

    public function getValue()
    {
        $v = 0;
        $n = 0;
        foreach ($this->subSkills->serializableParams() as $name => $class)
        {
            $v += $this->subSkills->$name->value;
            $n++;
        }

        return clamp(floor($v/$n),0,5);
    }

    public function setValue($new_value)
    {
        // TODO: Implement setValue() method.
    }
}