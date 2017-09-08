<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\base;


use app\modules\game\helpers\FormatterHelper;

abstract class BaseAttribute extends BaseGameData implements INamedValues
{
    /**
     * @var int
     */
    public $value = 0;
    public $learnRate = 1;

    public function serialize()
    {
        return [
            'value' => $this->value,
            'learnRate' => $this->learnRate,
        ];
    }

    public function unserialize($serialized_data)
    {
        if(isset($serialized_data['value']))
        {
            $this->value = $serialized_data['value'];
        }
    }

    public function getMaxValue()
    {
        return max(array_keys($this->valueNames()));
    }

    public function out()
    {
        return FormatterHelper::colorAttribute($this->valueNames()[$this->value], $this->value);
    }
}
