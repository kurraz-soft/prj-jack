<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\aura;


use app\modules\game\models\game_data\base\BaseAuraAttribute;
use app\modules\game\models\game_data\base\IAutoSerializable;
use app\modules\game\models\game_data\serializators\AutoSerializator;

class Obedience extends BaseAuraAttribute implements IAutoSerializable
{
    public $difficulty = 14;

    public function serializableParams()
    {
        return [
            'value' => '',
            'difficulty' => '',
        ];
    }

    protected function getSerializator()
    {
        return new AutoSerializator($this);
    }
}