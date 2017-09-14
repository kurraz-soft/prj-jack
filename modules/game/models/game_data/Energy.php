<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data;


use app\modules\game\models\game_data\base\BaseGameData;

class Energy extends BaseGameData
{
    public $value = 5;

    public function serialize()
    {
        return [
            'value' => $this->value,
        ];
    }

    public function unserialize($serialized_data)
    {
        if(!empty($serialized_data['value']))
        {
            $this->value = $serialized_data['value'];
        }
    }

    public function out()
    {
        $str = str_repeat('*', abs($this->value));
        $color_grade = $this->value > 0 ? 5 : 0;
        $str = '<span class="g-color-grade-'.$color_grade.'">'.$str.'</span>';

        return $str;
    }
}