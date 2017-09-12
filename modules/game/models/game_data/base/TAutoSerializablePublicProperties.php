<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\base;


use app\modules\game\helpers\AnnotationHelper;

trait TAutoSerializablePublicProperties
{
    public function serializableParams()
    {
        return AnnotationHelper::getObjectPropertiesTypes($this, \ReflectionProperty::IS_PUBLIC);
    }
}