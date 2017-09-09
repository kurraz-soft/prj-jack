<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\helpers;


class RandomHelper
{
    public static function randFloat($min, $max, $precision = 1)
    {
        $base = pow(10, $precision);

        $rand = mt_rand($min * $base, $max * $base);
        return $rand / $base;
    }
}