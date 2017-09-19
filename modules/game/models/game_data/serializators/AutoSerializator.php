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
        }elseif($type === '__class')
        {
            $ret = get_class($this->obj);
        }else
        {
            $ret = $serializable_var;
        }

        return $ret;
    }

    public function unserialize($serialized_data)
    {
        $serializable_params = $this->obj->serializableParams();
        foreach ($serializable_params as $name => $type)
        {
            if(class_exists($type) && (new \ReflectionClass($type))->isSubclassOf(ISerializable::class))
            {
                if(!empty($serialized_data[$name]))
                {
                    if(!empty($serialized_data[$name]['__class']))
                        $this->obj->$name = new $serialized_data[$name]['__class']();
                    else
                        $this->obj->$name = new $type();
                    if($this->obj->$name instanceof IChild)
                    {
                        $this->obj->$name->setParent($this->obj);
                    }
                    $this->obj->$name->unserialize($serialized_data[$name]);
                }else
                {
                    if($this->obj->$name instanceof ISerializable)
                    {
                        if($this->obj->$name instanceof IChild)
                        {
                            $this->obj->$name->setParent($this->obj);
                        }
                        $this->obj->$name->unserialize([]);
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