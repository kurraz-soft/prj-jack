<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data;


use app\modules\game\models\game_data\base\BaseGameData;

class Wallet extends BaseGameData
{
    public $money;

    public function spend($sum)
    {
        $this->money -= $sum;
    }

    public function add($sum)
    {
        $this->money += $sum;
    }

    public function serialize()
    {
        return [
            'money' => $this->money,
        ];
    }

    public function unserialize($serialized_data)
    {
        $this->money = $serialized_data['money'];
    }
}
