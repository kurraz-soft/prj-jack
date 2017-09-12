<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\tests\unit\modules\game\models\game_data;


use app\modules\game\models\game_data\Home;
use app\modules\game\models\game_data\home_rooms\StorageHomeRoom;
use Codeception\Test\Unit;

class HomeTest extends Unit
{
    public function testSerializableParams()
    {
        $h = new Home();
        $params = $h->serializableParams();

        expect($params['storage'])->equals(StorageHomeRoom::class);
    }

    public function testSettingDefaultLocation()
    {
        $h = new Home();
        $h->unserialize([]);

        expect_that(is_array($h->location_route) && count($h->location_route) > 0);
    }
}