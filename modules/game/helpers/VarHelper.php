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

    static public function getNamespaceClasses($namespace, $is_recursive = true)
    {
        $folder = str_replace('app', \Yii::getAlias('@app'), $namespace);
        $folder = preg_replace('#\\\#','/',$folder);

        $files = scandir($folder);

        $classes = [];

        foreach ($files as $file)
        {
            if($file == '.' || $file == '..') continue;

            if($is_recursive && is_dir($folder.'/'.$file))
            {
                $classes = array_merge($classes, static::getNamespaceClasses($namespace . '\\' . $file));
                continue;
            }

            list($name, $ext) = explode('.', $file);
            if($ext != 'php') continue;

            if(class_exists($namespace . '\\' . $name))
            {
                $classes[] = $namespace . '\\' . $name;
            }
        }

        return $classes;
    }
}