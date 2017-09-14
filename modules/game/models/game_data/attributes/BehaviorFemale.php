<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\attributes;


use app\modules\game\helpers\FormatterHelper;
use app\modules\game\models\game_data\base\BaseAttribute;

class BehaviorFemale extends BaseAttribute
{
    public function valueNames()
    {
        return [
            -5 => 'Провинилась [5]',
            -4 => 'Провинилась [4]',
            -3 => 'Провинилась [3]',
            -2 => 'Провинилась [2]',
            -1 => 'Провинилась [1]',
            0 => 'Не имеет заслуг',
            1 => 'Отличилась [1]',
            2 => 'Отличилась [2]',
            3 => 'Отличилась [3]',
            4 => 'Отличилась [4]',
            5 => 'Отличилась [5]',
        ];
    }

    public function getStatus()
    {
        return FormatterHelper::colorState($this->valueNames()[$this->value], $this->value, function($val){
            if($val > 0) return 5;
            if($val == 0) return 'locked';
            return 0;
        });
    }
}