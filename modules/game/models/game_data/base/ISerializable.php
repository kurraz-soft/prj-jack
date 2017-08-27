<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\base;


interface ISerializable
{
    /**
     * @return array
     */
    public function serialize();

    /**
     * @param array $serialized_data
     */
    public function unserialize($serialized_data);
}