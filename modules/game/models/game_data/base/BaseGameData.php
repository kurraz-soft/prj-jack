<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\base;


use app\modules\game\models\GameData;
use yii\base\Exception;

abstract class BaseGameData implements ISerializable, IChild, IInitable
{
    protected $_parent = null;

    public function import(GameData $game_data)
    {
        $data = [];
        if(isset($game_data->getExtractedData()[get_called_class()]))
        {
            $data = $game_data->getExtractedData()[get_called_class()];
        }
        $this->unserialize($data);
    }

    public function export(GameData $game_data)
    {
        $data = $this->serialize();
        $game_data->setDataValue(get_called_class(), $data);
    }

    public function setParent($parent_obj)
    {
        $this->_parent = $parent_obj;
    }

    /**
     * @return object
     */
    public function getParent()
    {
        return $this->_parent;
    }

    /**
     * Dependency Injection
     *
     * @param $class
     * @return object
     * @throws Exception
     */
    public function getDependency($class)
    {
        if($this->getParent() == null) throw new Exception('No parent');

        $properties = (new \ReflectionObject($this->getParent()))->getProperties(\ReflectionProperty::IS_PUBLIC);
        foreach ($properties as $property)
        {
            $obj = $this->_parent->{$property->name};
            if($obj instanceof $class)
            {
                return $obj;
            }
        }

        foreach ($properties as $property)
        {
            $obj = $this->_parent->{$property->name};
            if($obj instanceof IChild)
            {
                try
                {
                    return $obj->getDependency($class);
                }catch (Exception $e)
                {

                }
            }
        }

        throw new Exception('Can\'t find dependency');
    }

    /**
     * Starts after unserialize step
     */
    public function init()
    {

    }
}