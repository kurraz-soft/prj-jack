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

    /**
     * @param $value_weights
     * @return mixed
     *
     * [$value => $weight]
     */
    public static function randByWeights($value_weights)
    {
        $sum_weights = array_sum($value_weights);
        $value_weights_normalized = [];
        foreach ($value_weights as $value => $weight)
        {
            $value_weights_normalized[$value] = ($weight / (float)$sum_weights) * 100;
        }

        $rand = mt_rand(0, 100);
        foreach ($value_weights_normalized as $value => $weight)
        {
            if($rand <= $weight)
            {
                return $value;
            }
        }

        return array_keys($value_weights)[0];
    }

    /**
     * Returns $var by $chance or else returns $else
     * @param $var
     * @param $else
     * @param int $chance percent max 100
     * @return mixed
     */
    public static function randChooseVar($var, $else, $chance)
    {
        return static::randByWeights([$var => $chance, $else => 100 - $chance]);
    }

    public static function randArrayValue($array)
    {
        return $array[array_rand($array)];
    }
}