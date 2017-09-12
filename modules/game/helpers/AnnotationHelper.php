<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\helpers;


class AnnotationHelper
{
    public static function getObjectPropertiesTypes($object, $filter = null)
    {
        $class = new \ReflectionClass($object);
        $props = $class->getProperties($filter);

        $source = file_get_contents($class->getFileName());

        $ret = [];

        foreach ($props as $prop)
        {
            $doc = $prop->getDocComment();

            $matches = [];
            $prop_class_name = '';
            if(preg_match('#@var (\w+)#', $doc, $matches))
            {
                $prop_class_name = $matches[1];
                if(!class_exists($prop_class_name))
                {
                    $pattern = '#use (.+'.$prop_class_name.')#';
                    if(preg_match($pattern, $source, $matches))
                    {
                        $prop_class_name = $matches[1];
                    }else
                    {
                        $prop_class_name = $class->getNamespaceName() . '\\' . $prop_class_name;
                    }
                }
            }

            $ret[$prop->getName()] = $prop_class_name;
        }

        return $ret;
    }
}