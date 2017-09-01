<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\base;


class BaseGameDataList extends BaseGameData
{
     /**
     * @var array
     */
    protected $_child_game_data = [];
    protected $_properties = [];

    public function __construct()
    {
        foreach ($this->_child_game_data as $name => $class)
            $this->$name = new $class();
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
        $ret = [];
        foreach ($this->_child_game_data as $name => $class)
        {
            $ret[$name] = $this->$name->serialize();
        }

        return $ret;
    }

    public function unserialize($serialized_data)
    {
        foreach ($this->_child_game_data as $name => $class)
        {
            if(isset($serialized_data[$name]))
            {
                $this->$name->unserialize($serialized_data[$name]);
            }
        }
    }
}