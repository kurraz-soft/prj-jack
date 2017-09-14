<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\serializators;


use app\modules\game\models\game_data\base\IAutoSerializable;
use app\modules\game\models\game_data\base\IChild;
use app\modules\game\models\game_data\base\IInitable;
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
            $ret[$name] = $this->serializeItem($this->obj->$name, $type);
        }

        return $ret;
    }

    protected function serializeItem($serializable_var, $type)
    {
        $ret = null;

        if(class_exists($type))
        {
            if(is_array($serializable_var))
            {
                $ret = [];
                foreach ($serializable_var as $key => $array_item)
                {
                    $ret[$key] = $this->serializeItem($array_item, $type);
                }
            }elseif($serializable_var instanceof ISerializable)
            {
                $ret = $serializable_var->serialize();
            }
        }else
        {
            $ret = $serializable_var;
        }

        return $ret;
    }

    public function unserialize($serialized_data)
    {
        foreach ($this->obj->serializableParams() as $name => $type)
        {
            if(class_exists($type) && (new \ReflectionClass($type))->isSubclassOf(ISerializable::class))
            {
                if(!empty($serialized_data[$name]))
                {
                    $this->obj->$name = new $type();
                    $this->obj->$name->unserialize($serialized_data[$name]);
                    if($this->obj->$name instanceof IChild)
                    {
                        $this->obj->$name->setParent($this->obj);
                    }
                }else
                {
                    if($this->obj->$name instanceof ISerializable)
                    {
                        $this->obj->$name->unserialize([]);
                        if($this->obj->$name instanceof IChild)
                        {
                            $this->obj->$name->setParent($this->obj);
                        }
                    }else
                    {
                        $this->obj->$name = null;
                    }
                }
            }else
            {
                if(isset($serialized_data[$name]))
                    $this->obj->$name = $serialized_data[$name];
            }
        }
        if($this->obj instanceof IInitable)
        {
            $this->obj->init();
        }
    }
}