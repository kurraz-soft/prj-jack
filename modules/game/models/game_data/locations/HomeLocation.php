<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\locations;


use app\modules\game\models\game_data\base\BaseLocation;

class HomeLocation extends BaseLocation
{
    public static function getRoute()
    {
        return ['/game/home/index'];
    }

    public function serializableParams()
    {
        return [];
    }
}