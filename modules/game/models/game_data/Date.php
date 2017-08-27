<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data;


use app\modules\game\models\game_data\base\BaseGameData;

class Date extends BaseGameData
{
    /**
     * @var int
     */
    private $day;

    public function serialize()
    {
        return [
            'day' => $this->day,
        ];
    }

    public function unserialize($serialized_data)
    {
        if(empty($serialized_data['day']))
        {
            $this->day = 1;
        }else
            $this->day = $serialized_data['day'];
    }

    /**
     * @return int
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * @return int
     */
    public function getDecade()
    {
        return (int)floor($this->day/10);
    }

    public function incDay()
    {
        $this->day++;
    }
}