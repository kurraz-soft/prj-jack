<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data;


use app\modules\game\helpers\FormatterHelper;
use app\modules\game\models\game_data\base\BaseGameData;

class RankApprentice extends BaseGameData
{
    public $value;

    public function serialize()
    {
        return [
            'values' => $this->value,
        ];
    }

    public function unserialize($serialized_data)
    {
        $this->value = $serialized_data['value'] ?? 0;
    }

    public function getStatus()
    {
        $str = '';

        switch ($this->value)
        {
            case 0:
                $str = 'F-';
                break;
            case 1:
                $str = 'D-';
                break;
            case 2:
                $str = 'D+';
                break;
            case 3:
                $str = 'D+';
                break;
            case 4:
                $str = 'C-';
                break;
            case 5:
                $str = 'C+';
                break;
            case 6:
                $str = 'B-';
                break;
            case 7:
                $str = 'B+';
                break;
            case 8:
                $str = 'A-';
                break;
            case 9:
                $str = 'A+';
                break;
            case 10:
                $str = 'S-';
                break;
            case 11:
                $str = 'S+';
                break;
        }
        return FormatterHelper::colorAttribute($str,$this->value);
    }
}