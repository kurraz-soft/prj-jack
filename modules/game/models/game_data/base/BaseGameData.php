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
     * @param array $objects_passed
     * @return object
     * @throws Exception
     */
    public function getDependency($class, $objects_passed = [])
    {
        //if($this->getParent() == null) throw new Exception('No parent');
        if(in_array($this, $objects_passed)) throw new Exception();
        array_push($objects_passed, $this);

        $properties = (new \ReflectionObject($this))->getProperties(\ReflectionProperty::IS_PUBLIC);
        foreach ($properties as $property)
        {
            $obj = $this->{$property->name};
            if($obj instanceof $class)
            {
                return $obj;
            }
        }

        foreach ($properties as $property)
        {
            $obj = $this->{$property->name};
            if(($obj instanceof IChild))
            {
                try
                {
                    return $obj->getDependency($class, $objects_passed);
                }catch (Exception $e)
                {

                }
            }
        }

        if($this->getParent() instanceof $class) return $this->getParent();

        if($this->getParent() && ($this->getParent() instanceof IChild))
        {
            return $this->getParent()->getDependency($class, $objects_passed);
        }else
        {
            throw new Exception("No parent");
        }
    }

    /**
     * Starts after unserialize step
     */
    public function init()
    {

    }
}