<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\base;


use app\modules\game\helpers\FormatterHelper;

abstract class BaseSkill extends BaseGameData implements IValuable, INamedValues
{
    /**
     * @return ISerializator
     */
    abstract protected function getSerializator();

    public function serialize()
    {
        return $this->getSerializator()->serialize();
    }

    public function unserialize($serialized_data)
    {
        $this->getSerializator()->unserialize($serialized_data);
    }

    public function getStatus()
    {
        return FormatterHelper::colorAttribute($this->valueNames()[$this->getValue()], $this->getValue());
    }
}
