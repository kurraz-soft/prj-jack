<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\rules;


use app\modules\game\models\game_data\base\BaseRule;

class Food extends BaseRule
{
    const NO = 1;
    const DRY_FOOD = 2;
    const FRESH_FOOD = 3;
    const BEAST_SPERM = 4;
    const MASTERS_FOOD = 5;

    public $masters_food = false;

    public $name = 'Режим питания';

    public function setValue($new_value)
    {
        if($new_value == self::MASTERS_FOOD)
        {
            $this->masters_food = !$this->masters_food;
        }else
            parent::setValue($new_value);
    }

    public function serialize()
    {
        return array_merge(parent::serialize(), ['masters_food' => $this->masters_food]);
    }

    public function unserialize($serialized_data)
    {
        parent::unserialize($serialized_data);

        if(isset($serialized_data['masters_food']))
        {
            $this->masters_food = $serialized_data['masters_food'];
        }
    }
}