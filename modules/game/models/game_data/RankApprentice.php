<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data;


use app\modules\game\models\game_data\base\BaseGameData;

class RankApprentice extends BaseGameData
{
    public function serialize()
    {
        return [];
    }

    public function unserialize($serialized_data)
    {
        // TODO: Implement unserialize() method.
    }
}