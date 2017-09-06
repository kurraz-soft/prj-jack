<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\base;


interface ISerializator extends ISerializable
{
    public function __construct($obj);
}