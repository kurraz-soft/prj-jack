<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\attributes;


use app\modules\game\models\game_data\base\BaseGameDataList;
use app\modules\game\models\game_data\base\INamedValues;

class AgeFemale extends BaseGameDataList implements INamedValues
{
    const LOLI = 1;
    const YOUNG = 2;
    const MATURE = 3;

    /**
     * @var int
     */
    public $value;

    public function serializableParams()
    {
        return [
            'value' => '',
        ];
    }

    public function valueNames()
    {
        return [
            self::LOLI => 'Юная',
            self::YOUNG => 'Молодая',
            self::MATURE => 'Зрелая',
        ];
    }

    public function getStatus()
    {
        return $this->valueNames()[$this->value];
    }
}