<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\base;


abstract class BaseRule extends BaseGameData implements IValuable
{
    /**
     * @var bool
     */
    public $value = 0;
    public $name;

    public function serialize()
    {
        return [
            'value' => $this->value,
        ];
    }

    public function unserialize($serialized_data)
    {
        if(isset($serialized_data['value']))
        {
            $this->value = $serialized_data['value'];
        }
    }

    /**
     * @param string $type
     * @return static
     */
    public static function factory($type)
    {
        return new $type();
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($new_value)
    {
        $this->value = $new_value;
    }
}