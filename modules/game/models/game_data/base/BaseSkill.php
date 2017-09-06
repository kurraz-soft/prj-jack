<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\base;


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
}
