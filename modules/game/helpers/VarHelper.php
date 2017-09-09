<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\helpers;


class VarHelper
{
    static public function exist($var)
    {
        return !empty($var) && strlen($var) > 0;
    }

    static public function existOrElse($var, $else)
    {
        return static::exist($var) ? $var : $else;
    }
}