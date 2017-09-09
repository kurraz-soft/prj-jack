<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\helpers;


class ArrayHelper
{
    public static function sumArrays($array1, $array2)
    {
        array_walk_recursive($array2, function($item, $key) use (&$array1){
            $array1[$key] = isset($array1[$key]) ?  $item + $array1[$key] : $item;
        });

        return $array1;
    }
}