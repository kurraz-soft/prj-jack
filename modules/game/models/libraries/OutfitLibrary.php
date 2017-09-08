<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\libraries;


use yii\base\Exception;

class OutfitLibrary
{
    public static function load()
    {
        return json_decode(file_get_contents(\Yii::getAlias('@game/data/items/outfit.json')), true);
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
}