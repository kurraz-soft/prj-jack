<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\base;


use app\modules\game\models\game_data\serializators\AutoSerializator;

abstract class BaseGameDataList extends BaseGameData implements IAutoSerializable
{
    protected $_properties = [];

    protected $_serializator;

    public function __construct()
    {
        foreach ($this->serializableParams() as $name => $class)
        {
            if(class_exists($class) && !(new \ReflectionClass($class))->isAbstract())
                $this->$name = new $class();
        }

        $this->_serializator = new AutoSerializator($this);
    }

    public function __get($name)
    {
        return $this->_properties[$name];
    }

    public function __set($name, $value)
    {
        $this->_properties[$name] = $value;
    }

    public function serialize()
    {
        return $this->_serializator->serialize();
    }

    public function unserialize($serialized_data)
    {
        $this->_serializator->unserialize($serialized_data);
    }
}