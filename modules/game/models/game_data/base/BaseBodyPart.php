<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\base;


use app\modules\game\models\game_data\serializators\AutoSerializator;

abstract class BaseBodyPart extends BaseGameData implements IAutoSerializable
{
    public function getSerializator()
    {
        return new AutoSerializator($this);
    }

    public function serialize()
    {
        return $this->getSerializator()->serialize();
    }

    public function unserialize($serialized_data)
    {
        $this->getSerializator()->unserialize($serialized_data);
    }
}