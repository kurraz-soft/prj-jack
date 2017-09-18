<?php
/**
 * Created by PhpStorm.
 * User: Kurraz
 */

namespace app\tests\unit\modules\game\models\game_data\home_rooms;


use app\modules\game\models\game_data\Home;
use app\modules\game\models\game_data\items\Armor;
use Codeception\Test\Unit;

class StorageHomeRoomTest extends Unit
{
    public function testAdd()
    {
        $home = new Home();
        $home->unserialize([]);

        $item = new Armor();
        $item->id = 'leather';

        $home->storage->add($item);
        $data = $home->serialize();

        $home = new Home();
        $home->unserialize($data);

        expect($home->storage->items_amount[$item->id])->equals(1);
    }

    public function testRemove()
    {
        $home = new Home();
        $home->unserialize([]);

        $item = new Armor();
        $item->id = 'leather';

        $home->storage->add($item);
        $data = $home->serialize();

        $home = new Home();
        $home->unserialize($data);

        $item = $home->storage->remove('leather');

        expect_that(!isset($home->storage->items_amount[$item->id]));
        expect($item->id)->equals('leather');
    }
}