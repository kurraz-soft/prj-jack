<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\modules\game\models\game_data\locations;


use app\modules\game\models\game_data\base\BaseLocation;

class WhiteCityLocation extends BaseLocation
{
    public function serializableParams()
    {
        return [];
    }

    public static function getRoute()
    {
        return ['/game/white-city/index'];
    }
}