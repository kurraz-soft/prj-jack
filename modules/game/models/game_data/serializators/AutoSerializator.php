<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\serializators;


use app\modules\game\models\game_data\base\IAutoSerializable;
use app\modules\game\models\game_data\base\IChild;
use app\modules\game\models\game_data\base\ISerializable;
use app\modules\game\models\game_data\base\ISerializator;
use yii\base\Exception;

class AutoSerializator implements ISerializator
{
    /**
     * @var IAutoSerializable
     */
    public $obj;

    /**
     * AutoSerializator constructor.
     * @param IAutoSerializable $obj
     * @throws Exception
     */
    public function __construct($obj)
    {
        if(!($obj instanceof IAutoSerializable)) throw new Exception();

        $this->obj = $obj;
    }

    public function serialize()
    {
        $ret = [];

        foreach ($this->obj->serializableParams() as $name => $type)
        {
            if(class_exists($type))
            {
                $serializable_var = $this->obj->$name;
                if($serializable_var instanceof ISerializable)
                {
                    $ret[$name] = $serializable_var->serialize();
                }
            }else
            {
                $ret[$name] = $this->obj->$name;
            }
        }

        return $ret;
    }

    public function unserialize($serialized_data)
    {
        foreach ($this->obj->serializableParams() as $name => $type)
        {
            if($this->obj->$name instanceof ISerializable)
            {
                $this->obj->$name = new $type();
                if($this->obj->$name instanceof IChild)
                {
                    $this->obj->$name->setParent($this->obj);
                }
                if(isset($serialized_data[$name]))
                {
                    $this->obj->$name->unserialize($serialized_data[$name]);
                }
            }else
            {
                if(isset($serialized_data[$name]))
                    $this->obj->$name = $serialized_data[$name];
            }
        }
    }
}