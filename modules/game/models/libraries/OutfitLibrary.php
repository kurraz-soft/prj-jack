<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\libraries;


use app\modules\game\models\game_data\base\BaseItemOutfit;
use yii\base\Exception;

class OutfitLibrary
{
    public static function load($type)
    {
        return json_decode(file_get_contents(\Yii::getAlias('@game/data/items/outfit_'.$type.'.json')), true);
    }

    public static function findById($item_id, $type)
    {
        $items = static::load($type);
        foreach ($items as $item)
        {
            if($item['id'] == $item_id)
            {
                return $item;
            }
        }

        throw new Exception("Can't find item");
    }

    public static function fillObject(BaseItemOutfit $outfit, $data)
    {
        $outfit->name = $data['name'];
        $outfit->description = $data['description'];
        $outfit->bonus = $data['bonus'];
        $outfit->shop_img = $data['shop_img'];
    }
}