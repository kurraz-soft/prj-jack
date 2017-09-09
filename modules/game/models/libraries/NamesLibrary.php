<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\libraries;


class NamesLibrary
{
    public static function load($name_base)
    {
        return json_decode(file_get_contents(\Yii::getAlias('@game/data/names/'.$name_base.'.json')), true);
    }

    public static function getRandom($name_base)
    {
        $names = static::load($name_base);
        return $names[array_rand($names)];
    }
}