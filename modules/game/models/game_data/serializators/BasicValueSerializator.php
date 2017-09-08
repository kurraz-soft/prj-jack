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

    public function __construct($obj)
    {
        if(!($obj instanceof IValuable))
            throw new Exception("Serializator exception");

        $this->obj = $obj;
    }

    public function serialize()
    {
        return [
            'value' => $this->obj->getValue(),
        ];
    }

    public function unserialize($serialized_data)
    {
        if(isset($serialized_data['value']))
        {
            $this->obj->setValue($serialized_data['value']);
        }
    }
}