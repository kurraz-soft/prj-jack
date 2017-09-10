<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\helpers;


class VarHelper
{
    static public function exist($array, $key)
    {
        return array_key_exists($key, $array) && !empty($array[$key]) && strlen($array[$key]) > 0;
    }

    static public function existOrElse($array, $key, $else)
    {
        return static::exist($array, $key)? $array[$key] : $else;
    }
}