<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\serializators;


use app\modules\game\models\game_data\base\ISerializator;
use app\modules\game\models\game_data\base\IValuable;
use yii\base\Exception;

class BasicValueSerializator implements ISerializator
{
    /**
     * @var IValuable
     */
    public $obj;
    public $var_name;

    public function __construct($obj, $var_name = 'value')
    {
        if(!($obj instanceof IValuable))
            throw new Exception("Serializator exception");

        $this->obj = $obj;
        $this->var_name = $var_name;
    }

    public function serialize()
    {
        return [
            $this->var_name => $this->obj->getValue(),
        ];
    }

    public function unserialize($serialized_data)
    {
        if(isset($serialized_data[$this->var_name]))
        {
            $this->obj->setValue($serialized_data[$this->var_name]);
        }
    }
}