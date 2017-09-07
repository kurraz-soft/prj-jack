<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\attributes;


use app\modules\game\models\game_data\base\BaseGameDataList;

class AgeFemale extends BaseGameDataList
{
    const IMMATURE = 1;
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
}