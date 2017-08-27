<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\helpers;


class FormatterHelper
{
    static $colors = [
        'red'=> '#cd0000',
        'pink' => '#C71585',
        'purple' => '#4B0082',
        'blue' => '#0000CD',
        'cyan' => '#008080',
        'black' => '#000000',
    ];

    static public function colorState($s, $state)
    {
        if($state < 0)
        {
            $color = static::$colors['red'];
        }elseif($state == 0)
        {
            $color = static::$colors['black'];
        }else
        {
            $color = static::$colors['cyan'];
        }

        return '<span style="color: '.$color.'">' . $s . '</span>';
    }

    static public function colorAttribute($s, $attr)
    {
        $color = static::$colors['black']; //TODO
        return '<span style="color: '.$color.'">' . $s . '</span>';
    }
}