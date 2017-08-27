<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\base;


abstract class BaseRule extends BaseGameData
{
    /**
     * @var bool
     */
    public $active = false;
    public $name;

    public function serialize()
    {
        return [
            'active' => $this->active,
        ];
    }

    public function unserialize($serialized_data)
    {
        if(isset($serialized_data['active']))
        {
            $this->active = $serialized_data['active'];
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
}