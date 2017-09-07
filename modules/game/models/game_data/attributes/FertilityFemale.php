<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\attributes;


use app\modules\game\models\game_data\base\BaseGameDataList;

class FertilityFemale extends BaseGameDataList
{
    /**
     * @var int
     */
    public $value = 1;
    /**
     * @var bool
     */
    public $revealed = false;

    public function serializableParams()
    {
        return [
            'value' => '',
            'revealed' => '',
        ];
    }
}