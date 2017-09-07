<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\attributes;


use app\modules\game\models\game_data\base\BaseGameDataList;

class DescriptionsFemale extends BaseGameDataList
{
    /**
     * @var string
     */
    public $world;
    /**
     * @var string
     */
    public $family;
    /**
     * @var string
     */
    public $occupation;

    public function serializableParams()
    {
        return [
            'world' => '',
            'family' => '',
            'occupation' => '',
        ];
    }
}