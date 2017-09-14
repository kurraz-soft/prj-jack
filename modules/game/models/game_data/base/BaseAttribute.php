<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\base;


use app\modules\game\helpers\FormatterHelper;

/**
 * Class BaseAttribute
 * @package app\modules\game\models\game_data\base
 *
 * @property int $value
 */
abstract class BaseAttribute extends BaseGameDataList implements INamedValues, IValuable
{
    use TMagicSetGet;
    /**
     * @var int
     */
    public $_value = 0;
    public $learn_rate = 1;
    public $xp = 0;

    public function serializableParams()
    {
        return [
            '_value' => '',
            'learn_rate' => '',
            'xp' => '',
        ];
    }

    public function getMaxValue()
    {
        return max(array_keys($this->valueNames()));
    }

    public function getMinValue()
    {
        return min(array_keys($this->valueNames()));
    }

    public function getValue()
    {
        return $this->_value;
    }

    public function setValue($new_value)
    {
        $this->_value = clamp($new_value, $this->getMinValue(), $this->getMaxValue());
    }

    public function getStatus()
    {
        return FormatterHelper::colorAttribute($this->valueNames()[$this->value], $this->value);
    }
}
