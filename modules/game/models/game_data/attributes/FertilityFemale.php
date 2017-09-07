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
     * @var bool
     */
    public $value = 1;
    /**
     * @var bool
     */
    public $revealed = 0;

    public function serializableParams()
    {
        return [
            'value' => '',
            'revealed' => '',
        ];
    }
}