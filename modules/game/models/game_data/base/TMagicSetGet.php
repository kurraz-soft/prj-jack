<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\base;


use yii\helpers\Inflector;

trait TMagicSetGet
{
    public function __set($name, $value)
    {
        $func_name = 'set' . Inflector::id2camel($name);
        $this->$func_name($value);
    }

    public function __get($name)
    {
        $func_name = 'get' . Inflector::id2camel($name);
        return $this->$func_name();
    }
}