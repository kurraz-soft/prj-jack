<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data;


use app\modules\game\models\game_data\base\BaseGameData;

class Debt extends BaseGameData
{
    public $sum;
    public $payDay;

    public function serialize()
    {
        return [
            'sum' => $this->sum,
            'payDay' => $this->payDay,
        ];
    }

    public function unserialize($serialized_data)
    {
        if(empty($serialized_data['sum']))
        {
            $this->sum = 0;
        }else
            $this->sum = $serialized_data['sum'];

        if(empty($serialized_data['payDay']))
        {
            $this->payDay = 0;
        }else
            $this->payDay = $serialized_data['payDay'];
    }

    public function isExist()
    {
        return $this->sum > 0;
    }

    public function daysLeft($current_day)
    {
        return $this->payDay - $current_day;
    }
}