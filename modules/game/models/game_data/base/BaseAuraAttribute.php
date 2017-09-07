<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\base;


use app\modules\game\models\game_data\serializators\BasicValueSerializator;

abstract class BaseAuraAttribute extends BaseGameData implements IValuable
{
    public $value = 0;
    protected $_serializator = null;

    protected function getSerializator()
    {
        if($this->_serializator == null)
        {
            $this->_serializator = new BasicValueSerializator($this);
        }
        return $this->_serializator;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($new_value)
    {
        $this->value = $new_value;
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