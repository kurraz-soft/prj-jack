<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\libraries;


use app\modules\game\models\game_data\items\Armor;
use yii\base\Exception;

class ArmorLibrary
{
    public static function load()
    {
        return json_decode(file_get_contents(\Yii::getAlias('@game/data/items/armor.json')), true);
    }

    public static function findById($item_id)
    {
        $items = static::load();
        foreach ($items as $item)
        {
            if($item['id'] == $item_id)
            {
                return $item;
            }
        }

        throw new Exception("Can't find item");
    }

    public static function fillObject(Armor $armor, $data)
    {
        $armor->name = $data['name'];
        $armor->description = $data['description'];
        $armor->bonus = $data['bonus'];
    }
}