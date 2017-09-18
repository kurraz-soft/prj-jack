<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\home_rooms;


use app\modules\game\models\game_data\base\BaseHomeRoom;
use app\modules\game\models\game_data\base\BaseItem;
use yii\base\Exception;

class StorageHomeRoom extends BaseHomeRoom
{
    /**
     * @var BaseItem[]
     */
    public $items = [];
    public $items_amount = [];

    public function serializableParams()
    {
        return [
            'items' => '',
            'items_amount' => '',
        ];
    }

    public function add(BaseItem $item, $amount = 1)
    {
        if(!isset($this->items_amount[$item->id]))
        {
            $this->items[] = $item;
            $this->items_amount[$item->id] = 0;
        }
        $this->items_amount[$item->id] += $amount;
    }

    public function remove($item_id, $amount = 1)
    {
        if(!isset($this->items_amount[$item_id])) throw new Exception("There is no such item");
        if($amount > $this->items_amount[$item_id]) throw new Exception('There are not enough amount of item');

        $this->items_amount[$item_id] -= $amount;

        $ret_item = null;

        $item_index = -1;
        foreach ($this->items as $k => $item)
        {
            if($item->id == $item_id)
            {
                $ret_item = $item;
                $item_index = $k;
                break;
            }
        }

        if($this->items_amount[$item_id] == 0)
        {
            unset($this->items[$item_index]);
            $this->items = array_values($this->items);
            unset($this->items_amount[$item_id]);
        }

        return $ret_item;
    }
}