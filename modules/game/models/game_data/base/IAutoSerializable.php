<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\base;


interface IAutoSerializable
{
    /**
     * @return array
     */
    public function serializableParams();
}