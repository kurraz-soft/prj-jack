<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\home_rooms;


use app\modules\game\models\game_data\base\BaseHomeRoom;

class JailHomeRoom extends BaseHomeRoom
{
    public function serializableParams()
    {
        return [];
    }
}