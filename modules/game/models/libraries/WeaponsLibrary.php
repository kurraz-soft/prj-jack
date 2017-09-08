<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\libraries;


use app\modules\game\models\game_data\items\Weapon;
use yii\base\Exception;

class WeaponsLibrary
{
    public static function load()
    {
        return json_decode(file_get_contents(\Yii::getAlias('@game/data/items/weapons.json')), true);
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

    public static function fillWeaponObject(Weapon $weapon, $data)
    {
        $weapon->name = $data['name'];
        $weapon->description = $data['description'];
        $weapon->damageAttribute = $data['damageAttribute'];
        $weapon->damageBonus = $data['damageBonus'];
        $weapon->damageType = $data['damageType'];
        $weapon->type = $data['type'];
        $weapon->attacks = $data['attacks']; //TODO create Attack class
        $weapon->keywords = $data['keywords'];
    }
}