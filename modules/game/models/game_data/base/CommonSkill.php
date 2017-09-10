<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\base;


use app\modules\game\models\game_data\serializators\BasicValueSerializator;

/**
 * Class CommonSkill
 * @package app\modules\game\models\game_data\base
 *
 * @property $value
 */
abstract class CommonSkill extends BaseSkill
{
    use TMagicSetGet;

    public $_value = 0;
    protected $_serializator = null;

    protected function getSerializator()
    {
        if($this->_serializator == null)
        {
            $this->_serializator = new BasicValueSerializator($this, '_value');
        }
        return $this->_serializator;
    }

    public function getValue()
    {
        return $this->_value;
    }

    public function setValue($new_value)
    {
        $this->_value = clamp($new_value, $this->getMinValue(), $this->getMaxValue());
    }

    public function getMaxValue()
    {
        return max(array_keys($this->valueNames()));
    }

    public function getMinValue()
    {
        return min(array_keys($this->valueNames()));
    }
}