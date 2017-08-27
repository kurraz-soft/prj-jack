<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data;


use app\modules\game\models\game_data\base\BaseGameData;

class Energy extends BaseGameData
{
    public $value;

    public function serialize()
    {
        return [
            'value' => $this->value,
        ];
    }

    public function unserialize($serialized_data)
    {
        if(empty($serialized_data['value']))
        {
            $this->value = 0;
        }else
            $this->value = $serialized_data['value'];
    }

    public function out()
    {
        return str_repeat('*', $this->value);
    }
}